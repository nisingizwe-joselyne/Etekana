<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\topic;
use App\Models\BlogPost;
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
        $course = course::findOrFail($id);
        return view('detail',compact('course','topics'));                                  
    }
}
