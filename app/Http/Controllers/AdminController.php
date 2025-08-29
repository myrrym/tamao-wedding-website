<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitMessage;
use App\Models\ShareMemory;

class AdminController extends Controller
{
    public function index()
    {
        $pendingMessages = SubmitMessage::where('approved_flag', 0)->get();
        $pendingMemories = ShareMemory::where('approved_flag', 0)->get();

        return view('admin', [
            'pendingMessages' => $pendingMessages,
            'pendingMemories' => $pendingMemories,
        ]);
    }
}