<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;

class HomeSliderController extends Controller
{
  public function HomeSlider()
  {
    $homeslide = HomeSlide::find(3);
    //   var_dump ($homeslide->id); die;
    return view('admin.home_slide.home_slide_all', compact('homeslide'));
  } // End Method

  public function UpdateSlider(Request $request)
  {
    $slide_id = $request->id;

    if ($request->file('home_slide')) {
      $image = $request->file('home_slide');
      $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //545555.jpg

      Image::make($image)
        ->resize(636, 852)
        ->save('upload/home_slide/' . $name_gen);
      $save_url = 'upload/home_slide/' . $name_gen;

      HomeSlide::findOrFail($slide_id)->update([
        'title' => $request->title,
        'short_title' => $request->short_title,
        'home_slide' => $save_url,
      ]);

      $notification = [
        'message' => 'Home Slide Update with Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->back()
        ->with($notification);
    } else {
      HomeSlide::findOrFail($slide_id)->update([
        'title' => $request->title,
        'short_title' => $request->short_title,
      ]);

      $notification = [
        'message' => 'Home Slide Update without Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->back()
        ->with($notification);
    } //end Else
  } // End Method
}
