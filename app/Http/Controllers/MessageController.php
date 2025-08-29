<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitMessage;

class MessageController extends Controller
{
    public function index()
    {
        // Only get approved messages
        $messages = SubmitMessage::where('approved_flag', 1)->latest()->get();

        return view('messages', compact('messages'));
    }
    
    public function approve($id)
    {
        $message = SubmitMessage::findOrFail($id);
        $message->approved_flag = 1;
        $message->save();

        return redirect()->back()->with('success', 'Message approved!');
    }

    public function reject($id)
    {
        $message = SubmitMessage::findOrFail($id);
        $message->approved_flag = 2;
        $message->save();

        return redirect()->back()->with('success', 'Message rejected!');
    }
}