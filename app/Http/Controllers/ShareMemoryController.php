<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareMemory;

class ShareMemoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:1000',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('memories', 'public');
        }

        ShareMemory::create([
            'from' => $request->input('from'),
            'image' => $path,
            'approved_flag' => 0
        ]);

        return redirect()->back()->with('success', 'Your memory has been submitted!');
    }
}