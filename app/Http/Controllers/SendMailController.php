<?php

namespace App\Http\Controllers;

use App\Mail\LeadEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class SendMailController extends Controller
{
    //$data são os dados do formulário
    public function index($data){

     Mail::to('pedro_cesar93@hotmail.com')->send(new LeadEmail($data));
     
     return redirect()->route('success');

    }
}
