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


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/who_i_am', 'admin\WoiController@edit')->name('who_i_am');
Route::post('/admin/who_i_am', 'admin\WoiController@update')->name('who_i_am_update');
Route::get('/admin/studies', 'admin\StudiesController@edit')->name('edit_studies');
Route::post('/admin/studies', 'admin\StudiesController@update')->name('studies_update');
Route::get('/admin/experiences', 'admin\ExperiencesController@index')->name('experiences');
Route::get('/admin/edit_experiences', 'admin\ExperiencesController@edit')->name('edit_experiences');
Route::post('/admin/edit_experiences', 'admin\ExperiencesController@create')->name('add_experiences');
Route::post('/admin/edit_experiences', 'admin\ExperiencesController@update')->name('experiences_update');
Route::get('/admin/techno', 'admin\TechnoController@edit')->name('techno');
Route::post('/admin/techno', 'admin\TechnoController@update')->name('techno_update');
Route::get('/admin/mail_list', 'admin\MailController@index')->name('mail_list');
Route::get('/admin/mail_read', 'admin\MailReadController@show')->name('mail');
Route::get('/admin/social', 'admin\SocialController@edit')->name('social');
Route::post('/admin/social', 'admin\SocialController@update')->name('social_update');
