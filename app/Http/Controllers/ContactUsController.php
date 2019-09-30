<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use Flash;
use Log;
class ContactUsController extends Controller
{
    public function store(Request $request){

        Log::debug($request->all());
        Mail::to($request->email)->send(new ContactUs($request->name, $request->message));

       
        Flash::success('Thank you, we have received your query, we will get back to you. .');

        
        return redirect()->back();
    }
}
