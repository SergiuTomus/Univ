<?php

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

Route::get('halls','HallsController@halls');
Route::get('/courses/all','CourseController@getAllCourses');
Route::get('/teacher-courses/{id}','CourseController@getAllTeachers')->name('courses.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact', 'ContactController@contact');

Route::get('/teachers', 'TeachersController@teachers');

Route::get('/hall/{name}', 'HallsPageController@hall')->name('hall.show');


  Route::middleware(['auth'])->group(function () {

    Route::get('/appointment', [
        'uses' => 'AppointmentController@appointment'
    ]);

    Route::get('/getAppointments', [
      'as' => 'allAppointments',
      'uses' => 'AppointmentController@getAppointments'
    ]);

});
  Route::get('/',function (){
      return view('pages.index');
  });

