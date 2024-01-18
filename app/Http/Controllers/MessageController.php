<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   
      /*********
       * Api EndPoint Get Test
       */
    //   public function getMessages(){
    //     return Message::all();
    //   }
    public function showForm()
    {
        return view('messages.customer-messaging');
    }

    public function sendMessage(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_id' => 'required',
            'message_body' => 'required',
        ]);

        // Create a new message
        $message = Message::create([
            'user_id' => $request->input('user_id'),
            'message_body' => $request->input('message_body'),
        ]);

        // You can return a response or redirect as needed
        // return redirect()->route('messaging.form')->with('message', 'Message sent successfully!');

        // Check if the request expects JSON
    if ($request->wantsJson()) {
        // If it's an API request, return a JSON response
        return response()->json(['message' => 'Message sent successfully', 'data' => $message], 201);
    } else {
        // If it's a web form request, redirect with a flash message
        return redirect()->route('messaging.form')->with('message', 'Message sent successfully!');
    }

    }

    public function sendMsg(Request $request){
        return Message::create($request->all())  ;
    }

    
    public function index()
    {
        $messages = Message::all();
        $users = User::all();
    
        return view("messages.index")->with(compact('messages', 'users'));
    }
    public function messages()
    {
        $messages = Message::all();
        return view("messages.messages", compact("messages"));
    }
    public function agents()
    {

        $users = User::all();
        return view("messages.agents", compact("users"));
    }
    public function replied()
    {
        $messages =  Message::whereNotNull('response')->get();
        return view("messages.replied", compact('messages'));
    }
    public function waiting()
    {
        $messages = Message::whereNotNull('response')->get(['id', 'user_id', 'message_body', 'response']);
        

        return view("messages.unreplied", compact('messages'));
    }
    public function reply($messageId)
    {
        $message = Message::findOrFail($messageId);
    
        return view('messages.reply-message', ['message' => $message]);
    }

    public function store(Request $request, $messageId)
    {
        
        $message = Message::findOrFail($messageId);

        // Update the response for the message
        $message->response = $request->input('message_response');
        $message->save();

        // Redirect back or to another page as needed
        return redirect()->route('all.messages')->with('message', 'Messsage Replied Successfully!');
    }
    


}