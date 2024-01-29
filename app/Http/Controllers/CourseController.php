<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    //direct course list page
    function list() {
        $courses = Course::select('courses.*', 'categories.name as category_name')
            ->when(request('key'), function ($query) {
                $query->where('courses.name', 'like', '%' . request('key') . '%');
            })
            ->leftJoin('categories', 'courses.category_id', 'categories.id')
            ->orderBy('courses.created_at', 'desc')
            ->paginate(3);
        $courses->appends(request()->all());
        return view('admin.course.list', compact('courses'));
    }

    //course create page
    public function createPage()
    {$categories = Category::select('id', 'name')->get();
        return view('admin.course.create', compact('categories'));
    }

    //course create
    public function create(Request $request)
    {
        $data = $this->requestCourseInfo($request);
        $fileName = uniqid() . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public', $fileName);
        $data['image'] = $fileName;
        Course::create($data);
        return redirect()->route('course#list')->with(['createSuccess' => 'Course Created ...']);

    }

    //course delete
    public function delete($id)
    {
        Course::where('id', $id)->delete();
        return redirect()->route('course#list')->with(['deleteSuccess' => 'Course Deleted ...']);
    }

    //course edit page
    public function edit($id)
    {$course = Course::select('courses.*', 'categories.name as category_name')
            ->leftJoin('categories', 'courses.category_id', 'categories.id')
            ->where('courses.id', $id)->first();

        $category = Category::get();
        $cou = Course::where('id', $id)->first();

        return view('admin.course.edit', compact('course', 'category', 'cou'));
    }

    //course validation check
    private function courseValidationCheck($request)
    {
        Validator::make($request->all(), [
            'courseCategory' => 'required',
            'courseName' => 'required',
            'courseFee' => 'required',
            'courseDuration' => 'required',
            'courePeriod' => 'required',
            'courseDescription' => 'required',
            'courseInstructor' => 'required',
            'student' => 'required',

        ])->validate();

    }

    //request course info
    private function requestCourseInfo($request)
    {

        return [
            'category_id' => $request->courseCategory,
            'name' => $request->courseName,
            'fee' => $request->courseFee,
            'course_duration' => $request->courseDuration,
            'period' => $request->coursePeriod,
            'description' => $request->courseDescription,
            'instructor' => $request->courseInstructor,
            'student' => $request->student,
            'image' => $request->image,
        ];
    }

}
