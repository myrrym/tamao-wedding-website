<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitMessage;

class SubmitMessageController extends Controller
{
    public function store(Request $request)
    {
        // validate input
        $validated = $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        // create record
        SubmitMessage::create([
            'from' => $validated['from'],
            'to' => $validated['to'],
            'message' => $validated['message'],
            'approved_flag' => 0, // default pending
        ]);

        // redirect back with success message
        return redirect()->back()->with('success', 'Your message has been submitted!');
    }
}