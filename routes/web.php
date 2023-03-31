<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\CoursesController;
use App\Http\Controllers\Home\InstrumentsController;
use App\Http\Controllers\Home\TeachersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('frontend.index');
// });

Route::controller(DemoController::class)->group(function () {
  Route::get('/', 'HomeMain')->name('home');
  Route::get('/about', 'Index')
    ->name('about.page')
    ->middleware('check');
  Route::get('/contact', 'ContactMethod')->name('contact.page');
});

//Admin All Route
Route::middleware(['auth'])->group(function () {
  //
  Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
  });
});

//Home Slide All Route
Route::controller(HomeSliderController::class)->group(function () {
  Route::get('/home/slide', 'HomeSlider')->name('home.slide');
  Route::post('/update/slidee', 'UpdateSlider')->name('update.slider');
});

//About Page All Route
Route::controller(AboutController::class)->group(function () {
  Route::get('/about/page', 'AboutPage')->name('about.page');
  Route::post('/update/about', 'UpdateAbout')->name('update.about');
  Route::get('/about', 'HomeAbout')->name('home.about');
  Route::get('/about/multi/image', 'AboutMultiImage')->name(
    'about.multi.image'
  );
  Route::post('/store/multi/image', 'StoreMultiImage')->name(
    'store.multi.image'
  );
  Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
  Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name(
    'edit.multi.image'
  );

  Route::post('/update/multi/image', 'UpdateMultiImage')->name(
    'update.multi.image'
  );
  Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name(
    'delete.multi.image'
  );
});

// Footer All Route
Route::controller(FooterController::class)->group(function () {
  Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
  Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});

// Contact All Route
Route::controller(ContactController::class)->group(function () {
  Route::get('/contact', 'Contact')->name('contact.me');
  Route::post('/store/message', 'StoreMessage')->name('store.message');
  Route::get('/contact/message', 'ContactMessage')->name('contact.message');
  Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
});

//Courses All Route
Route::controller(CoursesController::class)->group(function () {
  Route::get('/all/courses', 'AllCourses')->name('all.courses');
  Route::get('/add/courses', 'AddCourses')->name('add.courses');
  Route::post('/store/courses', 'StoreCourses')->name('store.courses');
  Route::get('/edit/courses/{id}', 'EditCourses')->name('edit.courses');
  Route::post('/update/courses', 'UpdateCourses')->name('update.courses');
  Route::get('/delete/courses/{id}', 'DeleteCourses')->name('delete.courses');
  Route::get('/courses/details/{id}', 'CoursesDetails')->name(
    'courses.details'
  );
});

//Instruments All Route
Route::controller(InstrumentsController::class)->group(function () {
  Route::get('/all/instruments', 'AllInstruments')->name('all.instruments');
  Route::get('/add/instruments', 'AddInstruments')->name('add.instruments');
  Route::post('/store/instruments', 'StoreInstruments')->name(
    'store.instruments'
  );
  Route::get('/edit/instruments/{id}', 'EditInstruments')->name(
    'edit.instruments'
  );
  Route::post('/update/instruments', 'UpdateInstruments')->name(
    'update.instruments'
  );
  Route::get('/delete/instruments/{id}', 'DeleteInstruments')->name(
    'delete.instruments'
  );
});

// Cart All Route
Route::controller(CartController::class)->group(function () {
  Route::get('cart', 'cartList')->name('cart.list');
  Route::post('cart', 'addToCart')->name('cart.store');
  Route::post('update-cart', 'updateCart')->name('cart.update');
  Route::post('remove', 'removeCart')->name('cart.remove');
  Route::post('clear', 'clearAllCart')->name('cart.clear');
});

// Teachers All Route
Route::controller(TeachersController::class)->group(function () {
  Route::get('/all/teachers', 'AllTeachers')->name('all.teachers');
  Route::get('/add/teachers', 'AddTeachers')->name('add.teachers');
  Route::post('/store/teachers', 'StoreTeachers')->name('store.teachers');
  Route::get('/edit/teachers/{id}', 'EditTeachers')->name('edit.teachers');
  Route::post('/update/teachers', 'UpdateTeachers')->name('update.teachers');
  Route::get('/delete/teachers/{id}', 'DeleteTeachers')->name(
    'delete.teachers'
  );
});

Route::get('/dashboard', function () {
  return view('admin.index');
})
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

require __DIR__ . '/auth.php';
