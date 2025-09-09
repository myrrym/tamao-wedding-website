<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemoryController extends Controller
{
    
    public function index()
    {
        // $files = glob(public_path('assets/memories/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
        // Convert absolute paths to relative URLs
        // $images = array_map(function ($file) {
        //     return 'assets/memories/' . basename($file);
        // }, $files);

        $images = Storage::files("assets/memories");

        return view('memories', [
            'images' => $images,
        ]);
    }

    public function memtest(){
        return "hehe";
    }

}