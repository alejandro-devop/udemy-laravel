<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceive;

class MessagesController extends Controller
{
    // public function store(Request $request) {
    public function store() {
        # $request->get('field');
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        # Send email.
        Mail::to('alejandro@alejosworld.com')->queue(new MessageReceive($data));
        return back()->with(['status' => 'Recibimos tu mensaje y te vamos a responder']);
    }
}
