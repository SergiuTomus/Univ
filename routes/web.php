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

Route::get('/teacher/{name}', 'TeacherPageController@teacher')->name('teacher.show');

Route::get('/faculties', 'FacultiesController@faculties');

Route::get('/faculty/{name}','FacultyPageController@faculty')->name('faculty.show');

  Route::middleware(['auth'])->group(function () {

    Route::get('/appointment', [
        'uses' => 'AppointmentController@appointment'
    ]);

    Route::get('/getAppointments', [
      'as' => 'allAppointments',
      'uses' => 'AppointmentController@getAppointments'
    ]);
      Route::get('profile/{slug}', 'UserController@index')->name('users.show');
      Route::get('/profile/{slug}/update','UserController@update')->name('users.update');

    Route::post('postAppointments', [
      'as' => 'sendAppointments',
      'uses' => 'AppointmentController@postAppointments'
    ]);

});

  Route::get('/',function (){
      return view('pages.index');
  });
  