<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   
    public function index(){
        $messages = Message::all();
        $users = User::all();
    
        return view("messages.index")->with(compact('messages', 'users'));
    }
    public function messages(){
        $messages = Message::all();
        return view("messages.messages",compact("messages"));
    }
    public function agents(){

        $users = User::all();
        return view("messages.agents",compact("users"));
    }
    public function replied(){
        $messages =  Message::whereNotNull('response')->get();
        return view("messages.replied",compact('messages'));
    }
    public function waiting(){
        $messages = Message::whereNotNull('response')->get(['id', 'user_id', 'message_body', 'response']);
        

        return view("messages.unreplied",compact('messages'));
    }
    public function replY(){
        $messages = Message::all();
        return view("messages.reply-message",compact("messages"));
    }

    
}