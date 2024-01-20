<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
   
     /*******
       * @Gabu-Rayon***
       * Api  EndPoint Postman Get test to get all messages
       */
    //   public function getMessages(){
    //     return Message::all();
    //   }


    
    /*******
       * @Gabu-Rayon*
       * web form  for sending Message
       */
    public function showForm(){
        
        return view('messages.customer-messaging');
    }
    

     /*******
       * @Gabu-Rayon*
       * User Controller to send Message via Postman Api endpoint
       * & web form Also
       */
    public function sendMessage(Request $request){
        // Validate the request
        $request->validate([
            'user_id' => 'required',
            'message_body' => 'required',
        ]);

        // Create a new message
        $message = Message::create([
            'user_id' => $request->input('user_id'),
            'message_body' => $request->input('message_body'),
            'status' => 'pending',  // Set status to "pending"
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
     

    /****8
     * Method for Show All Messages
     * All Agents
     */
    public function index()
    {
        $messages = Message::all();
        $users = User::all();
    
        return view("messages.index")->with(compact('messages', 'users'));
    }

    
    /*****
     * Method for Show All Messages and Agents in the Modal
     */
    public function messages(){
        $messages = Message::all();
        $users = User::all();
        return view("messages.messages",compact("messages", "users"));
    }
        
    
    /****
     * Method for showing all replied Messages
     */
    public function replied()
    {
        $messages = Message::where('status', 'replied')->get(['id', 'user_id', 'message_body', 'response']);

        return view("messages.replied", compact('messages'));
    }

    

   /*******
       * @Gabu-Rayon
     * Method for showing all unreplied Messages
     */

    public function waiting(){
        
    $messages = Message::where('status', 'pending')->get(['id', 'user_id', 'message_body', 'response']);

    return view("messages.unreplied", compact('messages')); 
    
    }
    
      /**
       *Controller for showing Agent Message form to reply to message
       */
    
    public function reply($messageId){
        
        $message = Message::findOrFail($messageId);
    
        return view('messages.reply-message', ['message' => $message]);
    }

    

   /*******
       * @Gabu-Rayon
     * Method for Updating replied to message
     */
    public function store(Request $request, $messageId){
        
        $message = Message::findOrFail($messageId);

        // Update the response for the message
        $message->response = $request->input('message_response');
        
        // Update the status to "replied"
        $message->status = 'replied';
        $message->save();

        // Redirect back to the agent messages page
       return Redirect::route('agent.messages', ['agentId' => $message->agent_id])->with('message', 'Message Replied Successfully!');
 

    }    
    

      /**
       * @Gabu-Rayon
       * Method for marking Message Urgent
       */
      public function markAsUrgent($id){
        
        $message = Message::find($id);
      
        $message->priority = !$message->priority;
        $message->save();
        return response()->json(['message' => 'Message priority updated', 'priority' => $message->priority], 200);
    
     }
      /*****
       * method in your controller to handle agent assignment
       */
      
   public function assignAgent(Request $request, $id) {
    
    $message = Message::find($id);
    
    if ($message->agent_id) {
        return response()->json(['success' => false, 'message' => 'Message is already assigned to an agent']);
    }

    
    $agentId = $request->input('agent_id');
    $agent = User::find($agentId);

    if (!$agent) {
        return response()->json(['success' => false, 'message' => 'Agent not found']);
    }

    $message->agent_id = $agentId;
    $message->save();

    return response()->json(['success' => true, 'agent_name' => $agent->name]);
   }
   /***
     * Method for All Agents
     */
    
    public function agents(){
    $users = User::with('assignedMessages')->get();
    return view("messages.agents", compact("users"));
    }
    
    /*****
     *  method in your controller to get messages for a specific agent
     * 
     * */
    
    public function getAgentMessages($agentId){
        
    $agent = User::with('assignedMessages')->findOrFail($agentId);
    return view('messages.agent-messages', compact('agent'));
    }

   
}