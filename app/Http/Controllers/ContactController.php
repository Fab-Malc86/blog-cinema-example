<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contacts()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        Mail::to('admin@example.com')->send(new \App\Mail\Contact($request->name, $request->email, $request->message));

        return redirect()->back()->with(['success' => 'Hai inviato il messaggio con successo']);
    }
}
