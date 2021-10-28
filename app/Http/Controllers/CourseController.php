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

    public function watch($link){
       $video = topic::join('courses', 'topics.course_id', '=', 'courses.id')
       ->where('topics.link','=',$link)
       ->select('topics.name', 'topics.link')
       ->get();
      
      return view('watch-video');
    }

    public function show($id)
    { 
        
        $subtitles = subtitle::all();
        $course = course::findOrFail($id);
        $topics = topic::join('courses', 'topics.course_id', '=', 'courses.id')
        ->where('topics.course_id','=', $id)
        ->select('topics.*', 'courses.title', 'courses.description', 'courses.content')->get();
        return view('detail',compact('course','topics','subtitles'));                                  
    }
}
