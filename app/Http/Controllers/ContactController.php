<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        $mailable = new ContactMessage($request->name, $request->email, $request->msg);
        Mail::to('hugo.lavergne@devinci.fr')->send($mailable);
        flashy()->success('Votre mail a été envoyé avec succès !');
        return redirect(route('contact.create'));
    }
}
