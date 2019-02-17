<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        new ContactMessageCreated($request->name, $request->email, $request->message);
    }
}
