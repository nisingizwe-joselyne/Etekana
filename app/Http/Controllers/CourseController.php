<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\topic;
use App\Models\BlogPost;
use App\Models\subtitle;
class CourseController extends Controller
{
    public function index ()
    {
        $courses = course::all();
        $blogs = BlogPost::all();
        return view('index',compact('courses','blogs'));
    }

    public function show($id)
    { 
        $topics = topic::all();
        $subtitles = subtitle::all();
        $course = course::findOrFail($id);
        return view('detail',compact('course','topics','subtitles'));                                  
    }
}
