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
Route::get('/admin/who_i_am', 'admin\WoiController@index')->name('who_i_am');
Route::get('/admin/studies', 'admin\StudiesController@index')->name('studies');
Route::get('/admin/experiences', 'admin\ExperiencesController@index')->name('experiences');
Route::get('/admin/edit_experiences', 'admin\EditExperiencesController@index')->name('edit_experiences');
Route::get('/admin/techno', 'admin\TechnoController@index')->name('techno');
Route::get('/admin/mail_list', 'admin\MailController@index')->name('mail_list');
Route::get('/admin/mail_read', 'admin\MailReadController@index')->name('mail');
Route::get('/admin/social', 'admin\SocialController@index')->name('social');
