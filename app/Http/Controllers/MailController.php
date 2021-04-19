<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSending;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sending(){
        $cv = new \stdClass();
        $cv -> receiver = 'Yernur Kalikhan';
        $cv -> sender = 'Yernur Kalikhan';

        Mail::to("ernur.k088@gmail.com")->send(new MailSending($cv)); 
        
    }
}
