<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HubungikamiController extends Controller
{
    public function hubungikami()
    {
        return view('frontend/hubungikami');
    }

    public function send(Request $request)
    {
        $attrs = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);
    }
}
