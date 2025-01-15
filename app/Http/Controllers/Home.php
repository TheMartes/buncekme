<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class Home extends Controller
{
    public function index()
    {
        $markdown = Storage::disk('local')->get('about.md');

        return view('home', ['content' => $markdown]);
    }
}
