<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;
use Image;
use Illuminate\Support\Carbon;

class TeachersController extends Controller
{
  public function AllTeachers()
  {
    $teachers = Teachers::latest()->get();
    return view('admin.teachers.teachers_all', compact('teachers'));
  } //End Method

  public function AddTeachers()
  {
    return view('admin.teachers.teachers_add');
  } //End Method

  public function StoreTeachers(Request $request)
  {
    $request->validate(
      [
        'teachers_name' => 'required',
        'teachers_course' => 'required',
        'teachers_image' => 'required',
      ],
      [
        'teachers_name.required' => 'Teachers Name is Required',
        'teachers_course.required' => 'Teachers Course is Required',
      ]
    );

    $image = $request->file('teachers_image');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //545555.jpg

    Image::make($image)
      ->resize(1020, 519)
      ->save('upload/teachers/' . $name_gen);
    $save_url = 'upload/teachers/' . $name_gen;

    Teachers::insert([
      'teachers_name' => $request->teachers_name,
      'teachers_course' => $request->teachers_course,
      'teachers_description' => $request->teachers_description,
      'teachers_image' => $save_url,
      'created_at' => Carbon::now(),
    ]);

    $notification = [
      'message' => 'Teachers Inserted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->route('all.teachers')
      ->with($notification);
  } //End Method

  public function EditTeachers($id)
  {
    $teachers = Teachers::findOrFail($id);
    return view('admin.teachers.teachers_edit', compact('teachers'));
  } //End Method

  public function UpdateTeachers(Request $request)
  {
    $teachers_id = $request->id;

    if ($request->file('teachers_image')) {
      $image = $request->file('teachers_image');
      $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //545555.jpg

      Image::make($image)
        ->resize(1020, 519)
        ->save('upload/teachers/' . $name_gen);
      $save_url = 'upload/teachers/' . $name_gen;

      Teachers::findOrFail($teachers_id)->update([
        'teachers_name' => $request->teachers_name,
        'teachers_course' => $request->teachers_course,
        'teachers_description' => $request->teachers_description,
        'teachers_image' => $save_url,
      ]);

      $notification = [
        'message' => 'Teachers Update with Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.teachers')
        ->with($notification);
    } else {
      Teachers::findOrFail($teachers_id)->update([
        'teachers_name' => $request->teachers_name,
        'teachers_course' => $request->teachers_course,
        'teachers_description' => $request->teachers_description,
      ]);

      $notification = [
        'message' => 'Teachers Update without Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.teachers')
        ->with($notification);
    } //end Else
  } // End Method

  public function DeleteTeachers($id)
  {
    $teachers = Teachers::findOrFail($id);
    $img = $teachers->teachers_image;
    unlink($img);

    Teachers::findOrFail($id)->delete();

    $notification = [
      'message' => 'Teachers Image Deleted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->back()
      ->with($notification);
  } // End Method
}
