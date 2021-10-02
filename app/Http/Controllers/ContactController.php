<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact_us');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone_num' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'email' => 'email',
            'subject' => 'required',
            'comments' => 'required',
            //TODO فعال سازی ریکپچا
            'g-recaptcha-response' => ['required',new Recaptcha()],
        ]);

        $contact = new Contact();
        $contact->full_name = $request->name;
        $contact->phone_num = $request->phone_num;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->comments;
        $contact->save();

        /* TODO Send sms and Email */
        return redirect('/contact_us')->with('success');

    }
}
