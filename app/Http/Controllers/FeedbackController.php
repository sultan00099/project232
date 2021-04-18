<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Customer;



class FeedbackController extends Controller
{
    //
    public function index(Request $request){
        
        $user = Customer::where('email', request('email'))->first();

        if($user === null){
            $user = new Customer(['email' => request('email')]);
        }
        $user->name = request('name');

        $user->save();

        if($request->file == null){
            Feedback::create([
                'customer_id' => $user->id,
                'message' => $request->message,
                'image' => ''
            ]);
        }
        else{
            Feedback::create([
                'customer_id' => $user->id,
                'message' => $request->message,
                'image' => $request->file
            ]);
            //Mail::to($request->email)->send(new WelcomeMail());
        }
    }
   
}
