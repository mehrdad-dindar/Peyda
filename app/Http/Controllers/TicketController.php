<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewTicketRequest;
use App\Http\Requests\StoreThisTicketRequest;
use App\Models\Ticket;
use App\Models\TicketDetail;
use App\Models\Unit;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $tickets=Ticket::query()->where('sender_id',auth()->user()->id)->get();
        $units=Unit::all();
        return view('profile.ticketing.index',['tickets'=>$tickets,'wallet'=>$wallet,'units'=>$units]);
    }

    public function storeThisTicket(StoreThisTicketRequest $request,$id)
    {
        //dd($request->all());
        $ticketDetail=TicketDetail::query()->create([
            'ticket_id'=>$id,
            'request'=>$request->descriptions
        ]);
        if($ticketDetail!=null){
            $msg='success';
            $msgBody='تیکت شما با موفقیت افزوده شد.';
        }else{
            $msg='error';
            $msgBody='خطا در افزودن تیکت!';
        }
        return $this->viewTicket($id,$msg,$msgBody);
    }

    public function viewTicket($id,$msg='',$msgBody='')
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $tickets=TicketDetail::query()->where('ticket_id','=',$id)->orderBy('id','desc')->get();
        $units=Unit::all();
        return view('profile.ticketing.viewticket',['wallet'=>$wallet,'units'=>$units,'tickets'=>$tickets,'id'=>$id,$msg=>$msgBody]);
    }

    public function overview()
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $units=Unit::all();
        return view('profile.ticketing.overview',['wallet'=>$wallet,'units'=>$units]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($msg='',$msgBody='')
    {
        $wallet = Wallet::where('user_id', "=", auth()->id())->first();
        $units=Unit::all();
        return view('profile.ticketing.create',['wallet'=>$wallet,'units'=>$units,$msg=>$msgBody]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(NewTicketRequest $request)
    {
        //dd($request->all());
        $ticket=Ticket::query()->create([
            'title'=>$request->title,
            'importance'=>$request->importance,
            'unit_id'=>$request->unit,
            'sender_id'=>auth()->user()->id
            ]);
        $ticketDetail=TicketDetail::query()->create([
            'ticket_id'=>$ticket->id,
            'request'=>$request->descriptions
        ]);
        if($ticketDetail!=null){
            $msg='success';
            $msgBody='تیکت شما با موفقیت افزوده شد.';
        }else{
            $msg='error';
            $msgBody='خطا در افزودن تیکت!';
        }
        return $this->create($msg,$msgBody);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
