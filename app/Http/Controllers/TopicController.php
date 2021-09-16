<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;
class TopicController extends Controller
{
    public function index ()
    {
        $topics = topic::all();

        return view('detail',compact('topics'));
    }
}
