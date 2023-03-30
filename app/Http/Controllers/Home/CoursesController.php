<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use Image;
use Illuminate\Support\Carbon;

class CoursesController extends Controller
{
  public function AllCourses()
  {
    $courses = Courses::latest()->get();
    return view('admin.courses.courses_all', compact('courses'));
  } // End Method

  public function AddCourses()
  {
    return view('admin.courses.courses_add');
  } // End Method

  public function StoreCourses(Request $request)
  {
    $request->validate(
      [
        'courses_name' => 'required',
        'courses_image' => 'required',
      ],
      [
        'courses_name.required' => 'Courses Name is Required',
      ]
    );

    $image = $request->file('courses_image');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //545555.jpg

    Image::make($image)
      ->resize(1020, 519)
      ->save('upload/courses/' . $name_gen);
    $save_url = 'upload/course/' . $name_gen;

    Courses::insert([
      'courses_name' => $request->courses_name,
      'courses_description' => $request->courses_description,
      'courses_price' => $request->courses_price,
      'courses_image' => $save_url,
      'created_at' => Carbon::now(),
    ]);

    $notification = [
      'message' => 'Courses Inserted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->route('all.courses')
      ->with($notification);
  } // End Method

  public function EditCourses($id)
  {
    $courses = Courses::findOrFail($id);
    return view('admin.courses.courses_edit', compact('courses'));
  } // End Method

  public function UpdateCourses(Request $request)
  {
    $courses_id = $request->id;

    if ($request->file('courses_image')) {
      $image = $request->file('courses_image');
      $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

      Image::make($image)
        ->resize(1020, 519)
        ->save('upload/courses/' . $name_gen);
      $save_url = 'upload/courses/' . $name_gen;

      Courses::findOrFail($courses_id)->update([
        'courses_name' => $request->courses_name,
        'courses_description' => $request->courses_description,
        'courses_price' => $request->courses_price,
        'courses_image' => $save_url,
      ]);
      $notification = [
        'message' => 'Courses Updated with Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.courses')
        ->with($notification);
    } else {
      Courses::findOrFail($courses_id)->update([
        'courses_name' => $request->courses_name,
        'courses_description' => $request->courses_description,
        'courses_price' => $request->courses_price,
      ]);
      $notification = [
        'message' => 'Courses Updated without Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.courses')
        ->with($notification);
    } // end Else
  } // End Method

  public function DeleteCourses($id)
  {
    $courses = Courses::findOrFail($id);
    $img = $courses->courses_image;
    unlink($img);

    Courses::findOrFail($id)->delete();

    $notification = [
      'message' => 'Courses Image Deleted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->back()
      ->with($notification);
  } // End Method

  public function CoursesDetails($id)
  {
    $courses = Courses::findOrFail($id);
    return view('frontend.courses_details', compact('courses'));
  } // End Method
}
