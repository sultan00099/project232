<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSending;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sending(){
        $cv = new \stdClass();
        $cv -> receiver = 'Web Developer';
        $cv -> sender = 'Sultan Abdualiyev';

        Mail::to("abdualievs47@gmail.com")->send(new MailSending($cv)); 
        
    }
}
