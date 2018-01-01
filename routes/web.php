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

Route::get('/','FrontHomeController@index')->name('home');
Route::get('/portfolio','FrontHomeController@portfolio')->name('portfolio');
Route::get('/contact','FrontHomeController@contact')->name('contact');
Route::post('/mail_send','FrontHomeController@envoiMails')->name('mail_send');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin')->middleware('auth')->middleware('auth');
Route::get('/admin/who_i_am', 'admin\WoiController@edit')->name('who_i_am')->middleware('auth')->middleware('auth');
Route::post('/admin/who_i_am', 'admin\WoiController@update')->name('who_i_am_update')->middleware('auth');
Route::get('/admin/studies', 'admin\StudiesController@edit')->name('edit_studies')->middleware('auth');
Route::post('/admin/studies', 'admin\StudiesController@update')->name('studies_update')->middleware('auth');
Route::get('/admin/studies_del/{id}', 'admin\StudiesController@destroy')->name('studies_destroy')->middleware('auth');
Route::get('/admin/jobs', 'admin\JobsController@edit')->name('edit_jobs')->middleware('auth');
Route::post('/admin/jobs', 'admin\JobsController@update')->name('jobs_update')->middleware('auth');
Route::get('/admin/jobs_del/{id}', 'admin\JobsController@destroy')->name('jobs_destroy')->middleware('auth');
Route::get('/admin/experiences', 'admin\ExperiencesController@index')->name('experiences')->middleware('auth');;
Route::get('/admin/edit_experiences/{id}', 'admin\ExperiencesController@edit')->name('edit_experiences')->middleware('auth');
Route::get('/admin/add_experiences', 'admin\ExperiencesController@show')->name('new_experiences')->middleware('auth');
Route::post('/admin/add_experiences', 'admin\ExperiencesController@create')->name('add_experiences')->middleware('auth');
Route::post('/admin/edit_experiences', 'admin\ExperiencesController@update')->name('experiences_update')->middleware('auth');
Route::get('/admin/experiences_del/{id}', 'admin\ExperiencesController@destroy')->name('experiences_destroy')->middleware('auth');
Route::get('/admin/techno', 'admin\TechnoController@edit')->name('techno')->middleware('auth');
Route::post('/admin/techno', 'admin\TechnoController@update')->name('techno_update')->middleware('auth');
Route::get('/admin/techno_del/{id}', 'admin\TechnoController@destroy')->name('techno_destroy')->middleware('auth');
Route::get('/admin/mail_list', 'admin\MailController@index')->name('mail_list')->middleware('auth');
Route::get('/admin/mail_read/{id}', 'admin\MailController@show')->name('mail')->middleware('auth');
Route::get('/admin/mail_del/{id}', 'admin\MailController@destroy')->name('mail_destroy')->middleware('auth');
Route::get('/admin/social', 'admin\SocialController@edit')->name('social')->middleware('auth');
Route::get('/admin/social_del/{id}', 'admin\SocialController@destroy')->name('social_destroy')->middleware('auth');
Route::post('/admin/social', 'admin\SocialController@update')->name('social_update')->middleware('auth');
