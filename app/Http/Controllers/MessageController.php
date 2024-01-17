<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view("messages.index");
    }
    public function messages(){
        return view("messages.messages");
    }
    public function agents(){
        return view("messages.agents");
    }
    public function replied(){
        return view("messages.replied");
    }

    
}