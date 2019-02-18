<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {

        $message = Message::create($request->only('name', 'email', 'message'));
        Mail::to( config('laracarte.admin_support_email'))->send(new ContactMessage($message));
        flashy()->success('Votre mail a été envoyé avec succès !');
        return redirect(route('contact.create'));
    }
}
