<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = course::all();
        return view('admin.course', compact('courses'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $course = new course;
        $course->name = $request->name;
        $course->email = $request->email;
        $course->contact = $request->contact;
        $course->course = $request->course;
        $course->message = $request->message;

        $course->save();

        return redirect()->back()
            ->with(['success' => 'Thank you . we will contact you shortly.']);
    }


    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
