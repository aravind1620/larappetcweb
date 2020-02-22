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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');

/* 	Route::get('manage-online-test', function () {
		return view('pages.manage_online_test');
	})->name('managetest'); */

	Route::get('manage_online_test', function () {
		return view('pages.manage_online_test');
	})->name('manage_online_test');

	Route::get('test_reports', function () {
		return view('pages.test_report');
	})->name('test_reports');

	Route::get('manage_offline_test', function () {
		return view('pages.manage_offline_test');
	})->name('manage_offline_test');

	Route::get('manage_students', function () {
		return view('pages.manage_students');
	})->name('manage_students');

	Route::get('manage_course_batch', function () {
		return view('pages.manage_course_batch');
	})->name('manage_course_batch');

	Route::get('syllabus_synopsis', function () {
		return view('pages.syllabus_synopsis');
	})->name('syllabus_synopsis');

	Route::get('questions', function () {
		return view('pages.questions');
	})->name('questions');

	Route::get('manage_faculty', function () {
		return view('pages.manage_faculty');
	})->name('manage_faculty');

	Route::get('institute_profile', function () {
		return view('pages.institute_profile');
	})->name('institute_profile');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

