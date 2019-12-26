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

Route::get('/','CatController@index')->name('/');
Route::get('/blog','CatController@blog')->name('blog');
Route::get('/member','CatController@member')->name('member');
Route::post('/contact', 'CatController@contactUs')->name('contact');
Route::get('/reply', 'CatController@replyTo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-blog', 'BlogController@addBlog')->name('add-blog');
Route::post('/save-blog', 'BlogController@saveBlog')->name('save-blog');
Route::get('/view-blog', 'BlogController@viewBlog')->name('view-blog');
Route::get('/blog/published/{id}', 'BlogController@publishedBlog')->name('published-blog');
Route::get('/blog/unpublished/{id}', 'BlogController@unpublishedBlog')->name('unpublished-blog');
Route::post('/update-blog', 'BlogController@updateBlog')->name('update-blog');
Route::get('/delete-blog/{id}', 'BlogController@deleteBlog')->name('delete-blog');



Route::get('/add-member', 'MemberController@addMember')->name('add-member');
Route::post('/save-member', 'MemberController@saveMember')->name('save-member');
Route::get('/view-member', 'MemberController@viewMember')->name('view-member');
Route::get('/member/published/{id}', 'MemberController@publishedMember')->name('published-member');
Route::get('/member/unpublished/{id}', 'MemberController@unpublishedMember')->name('unpublished-member');
Route::post('/update-member', 'MemberController@updateMember')->name('update-member');
Route::get('/delete-member/{id}', 'MemberController@deleteMember')->name('delete-member');
