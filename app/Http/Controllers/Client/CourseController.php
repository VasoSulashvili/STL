<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['title' => __('words.home'), 'url' => route('home')],
            ['title' => __('words.blog')]
        ];

        return view('client.course.index')
            ->with('title', 'course')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('courses', Course::active()->get());
    }

    public function show(Request $request)
    {
        $course = Course::where('id', '=', $request->course)->first();
        if(!$course)
        {
            return abort(404);
        }
        $breadcrumbs = [
            ['title' => 'home', 'url' => route('home')],
            ['title' => 'blog', 'url' => route('courses.index')],
            ['title' => $course->title],
        ];

        return view('client.course.show')
            ->with('title', 'course')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('course', $course)
            ->with('popularCourses', Course::active()->orderBy('popularity')->limit(5)->get());
    }
}
