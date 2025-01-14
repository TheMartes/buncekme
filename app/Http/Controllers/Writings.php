<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Writings extends Controller
{
    public function index()
    {
        $writings = collect(Storage::disk('local')->files('writings'))
            ->sortByDesc(function ($file) {
                return Storage::lastModified($file);
            })
            ->map(function ($file) {
                $title = str_replace('.md', '', $file);
                $title = explode('/', $title)[1];
                $title = str_replace('-', ' ', $title);

                $slug = str_replace('.md', '', $file);
                $slug = explode('/', $slug)[1];


                return [
                    'title' => $title,
                    'slug' => \strtolower($slug),
                ];
            });

        return view('writings.index', ['writings' => $writings]);
    }

    public function show($slug)
    {
        $file = Storage::disk('local')->get("writings/" . ucfirst($slug) . ".md");

        return view('writings.show', ['content' => $file]);
    }
}
