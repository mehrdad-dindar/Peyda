<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewTicketRequest;
use App\Http\Requests\StoreThisTicketRequest;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\Ticket;
use App\Models\TicketDetail;
use App\Models\Unit;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Traits\Notifications;

class TicketController extends Controller
{
    use Notifications;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $tickets = Ticket::query()->where('sender_id', auth()->user()->id)->orderBy('updated_at', 'desc')->get();
        $units = Unit::all();

        foreach ($tickets as $key => $ticket) {
            $ticketDeltail = TicketDetail::query()->where('ticket_id', $ticket->id)->orderBy('created_at', 'desc')->first();
            if ($ticketDeltail->response != null && $ticket->closed == 0) {
                $tickets[$key]['new'] = 1;
            } else {
                $tickets[$key]['new'] = 0;
            }

        }

        return view('profile.ticketing.index', ['tickets' => $tickets, 'wallet' => $wallet, 'units' => $units]);
    }

    public function storeThisTicket(StoreThisTicketRequest $request, $id)
    {
        //dd($request->all());
        $ticket=Ticket::query()->find($id);
        if($ticket->closed==1){
            $ticket->update([
                'closed'=>0
            ]);
        }

        $ticketDetail = TicketDetail::query()->create([
            'ticket_id' => $id,
            'request' => $request->descriptions
        ]);
        if ($ticketDetail != null) {
            $msg = 'success';
            $msgBody = 'تیکت شما با موفقیت افزوده شد.';
        } else {
            $msg = 'error';
            $msgBody = 'خطا در افزودن تیکت!';
        }
        return $this->viewTicket($id, $msg, $msgBody);
    }

    public function viewTicket($id, $msg = '', $msgBody = '')
    {
        $ticket = Ticket::find($id);
        if (!$ticket->seen) {
            Ticket::query()->where('id', $id)->update(['seen' => 1]);
        }
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $tickets = TicketDetail::query()->where('ticket_id', '=', $id)->orderBy('id', 'desc')->get();
        $units = Unit::all();

        return view('profile.ticketing.viewticket', ['wallet' => $wallet, 'units' => $units, 'tickets' => $tickets, 'ticket' => $ticket, 'id' => $id, $msg => $msgBody]);
    }

    public function closeTicket($id)
    {
        $ticket = Ticket::query()->where('id', $id)->update(['closed' => 1]);
        if ($ticket == 1) {
            return redirect()->back()->with('success', 'تیکت موردنظر با موفقیت بسته شد.');
        } else {
            return redirect()->back()->with('error', 'بستن تیکت با خطا مواجه شد!');
        }
    }

    public function adminTickets()
    {
        $tickets = Ticket::query()->where('closed', 0)->orderBy('importance', 'desc')->orderBy('updated_at', 'desc')->get();

        foreach ($tickets as $key => $ticket) {
            $ticketDeltail = TicketDetail::query()->where('ticket_id', $ticket->id)->orderBy('created_at', 'desc')->first();
            if ($ticketDeltail->response == null && $ticket->closed==0) {
                $tickets[$key]['new'] = 1;
            } else {
                $tickets[$key]['new'] = 0;
            }
        }

        return view('dashboard.ticketing.index', ['tickets' => $tickets]);
    }

    public function showResponse($id)
    {
        $ticketDetails = TicketDetail::query()->where('ticket_id', $id)->get();

        return view('dashboard.ticketing.create', ['ticketDetails' => $ticketDetails, 'id' => $id]);
    }

    public function addResponse(Request $request, $id)
    {
        Ticket::query()->where('id', $id)->update(['seen' => 0]);
        $ticketDetails = TicketDetail::query()->where('ticket_id', $id)->orderBy('created_at', 'desc')->first()->update([
            'admin_id' => auth()->user()->id,
            'response' => $request->response
        ]);

        $ticket=Ticket::find($id);

        if ($ticketDetails == 1) {
            $notif=new Notification();
            $notif->setSenderId(auth()->user()->id);
            $notif->setType(1);
            $notif->setTitle('تیکت پشتیبانی');
            $notif->setBody('پاسخ تیکت پشتیبانی داده شد.');
            $notif->setLink('/panel/ticketing/view/'.$id);

            $userNotif=new NotificationUser();
            $userNotif->setReceiverId($ticket->sender_id);

            $this->addNotif($notif,$userNotif);


            return redirect()->back()->with('success', 'پاسخ تیکت موردنظر ثبت شد.');

        } else {
            return redirect()->back()->with('error', 'ثبت پاسخ موردنظر با خطا مواجه شد!');
        }
    }

    public function overview()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $units = Unit::all();
        return view('profile.ticketing.overview', ['wallet' => $wallet, 'units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($msg = '', $msgBody = '')
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $units = Unit::all();
        return view('profile.ticketing.create', ['wallet' => $wallet, 'units' => $units, $msg => $msgBody]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(NewTicketRequest $request)
    {
        //dd($request->all());
        $ticket = Ticket::query()->create([
            'title' => $request->title,
            'importance' => $request->importance,
            'unit_id' => $request->unit,
            'sender_id' => auth()->user()->id
        ]);
        $ticketDetail = TicketDetail::query()->create([
            'ticket_id' => $ticket->id,
            'request' => $request->descriptions
        ]);
        if ($ticketDetail != null) {
            $msg = 'success';
            $msgBody = 'تیکت شما با موفقیت افزوده شد.';
        } else {
            $msg = 'error';
            $msgBody = 'خطا در افزودن تیکت!';
        }
        return $this->create($msg, $msgBody);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
