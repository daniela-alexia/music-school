<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instruments;
use Image;
use Illuminate\Support\Carbon;

class InstrumentsController extends Controller
{
  public function AllInstruments()
  {
    $instruments = Instruments::latest()->get();
    return view('admin.instruments.instruments_all', compact('instruments'));
  } // End Method

  public function AddInstruments()
  {
    return view('admin.instruments.instruments_add');
  } // End Method

  public function StoreInstruments(Request $request)
  {
    $request->validate(
      [
        'instruments_name' => 'required',
        'instruments_price' => 'required',
        'instruments_image' => 'required',
      ],
      [
        'instruments_name.required' => 'Instruments Name is Required',
        'instruments_price.required' => 'Instruments Price is Required',
      ]
    );

    $image = $request->file('instruments_image');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

    Image::make($image)
      ->resize(1020, 519)
      ->save('upload/instruments/' . $name_gen);
    $save_url = 'upload/instruments/' . $name_gen;

    Instruments::insert([
      'instruments_name' => $request->instruments_name,
      'instruments_price' => $request->instruments_price,
      'instruments_description' => $request->instruments_description,
      'instruments_image' => $save_url,
      'created_at' => Carbon::now(),
    ]);
    $notification = [
      'message' => 'Instruments Inserted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->route('all.instruments')
      ->with($notification);
  } // End Method

  public function EditInstruments($id)
  {
    $instruments = Instruments::findOrFail($id);
    return view('admin.instruments.instruments_edit', compact('instruments'));
  } // End Method

  public function UpdateInstruments(Request $request)
  {
    $instruments_id = $request->id;

    if ($request->file('instruments_image')) {
      $image = $request->file('instruments_image');
      $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //545555.jpg

      Image::make($image)
        ->resize(1020, 519)
        ->save('upload/instruments/' . $name_gen);
      $save_url = 'upload/instruments/' . $name_gen;

      Instruments::findOrFail($instruments_id)->update([
        'instruments_name' => $request->instruments_name,
        'instruments_price' => $request->instruments_price,
        'instruments_description' => $request->instruments_description,
        'instruments_image' => $save_url,
      ]);

      $notification = [
        'message' => 'Instruments Update with Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.instruments')
        ->with($notification);
    } else {
      Instruments::findOrFail($instruments_id)->update([
        'instruments_name' => $request->instruments_name,
        'instruments_price' => $request->instruments_price,
        'instruments_description' => $request->instruments_description,
      ]);

      $notification = [
        'message' => 'Instruments Update without Image Successfully',
        'alert-type' => 'success',
      ];

      return redirect()
        ->route('all.instruments')
        ->with($notification);
    } //end Else
  } // End Method

  public function DeleteInstruments($id)
  {
    $instruments = Instruments::findOrFail($id);
    $img = $instruments->instruments_image;
    unlink($img);

    Instruments::findOrFail($id)->delete();

    $notification = [
      'message' => 'Instruments Image Deleted Successfully',
      'alert-type' => 'success',
    ];

    return redirect()
      ->back()
      ->with($notification);
  } // End Method
}
