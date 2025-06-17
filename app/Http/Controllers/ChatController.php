<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        $messages = Message::with('user')->latest()->take(20)->get()->reverse();
        // return $messages;
        return view('chat.index', compact('messages'));
       
    }

    public function store(Request $request){
        $message = Message::create([
             'user_id' => Auth::id(),
            'message' => $request->message
        ]);
         broadcast(new MessageSent($message->load('user')))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }   
}
