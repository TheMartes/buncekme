<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Misc extends Controller
{
    public function index()
    {
        $miscs = collect(Storage::disk('local')->files('misc'))
            ->sortByDesc(function ($file) {
                return Storage::lastModified($file);
            })
            ->filter(function ($file) {
                return strpos($file, '.md') === true;
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
                    'date' => Carbon::parse(Storage::lastModified($file))->format('F jS, Y'),
                ];
            });

        return view('misc.index', ['miscs' => $miscs]);
    }

    public function show($slug)
    {
        $file = Storage::disk('local')->get("miscs/" . ucfirst($slug) . ".md");

        return view('misc.show', ['content' => $file]);
    }
}
