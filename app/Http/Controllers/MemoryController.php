<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoryController extends Controller
{
    
    public function index()
    {
        $files = glob(public_path('assets/memories/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);

        // Convert absolute paths to relative URLs
        $images = array_map(function ($file) {
            return 'assets/memories/' . basename($file);
        }, $files);

        return view('memories', compact('images'));
    }

    public function memtest(){
        return "hehe";
    }

}