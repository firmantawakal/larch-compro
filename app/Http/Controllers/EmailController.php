<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Mail\SendMail; //import juga SendMail
use Illuminate\Support\Facades\Mail; //jangan lupa import ini
    
class EmailController extends Controller
{
    public function index(){
        //isi Mail::to(...) dengan email tujuan yang kalian inginkan
        Mail::to("testing@email.com")->send(new SendMail());
    }
}