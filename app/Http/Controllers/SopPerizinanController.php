<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SopPerizinanController extends Controller
{
    public function sopperizinan()
    {
        return view('frontend/sopperizinan');
    }
}
