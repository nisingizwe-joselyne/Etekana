<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subtitle;
class SubtitleController extends Controller
{
    public function index ()
    {
        $subtitles = subtitle::all();

        return view('detail',compact('subtitles'));
    }

    public function show($id)
    { 
        $subtitles = subtitle::findOrFail($id);
        return view('detail',compact('subtitle'));                                  
    }
}
