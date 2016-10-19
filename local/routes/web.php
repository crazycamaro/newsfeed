<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//ADMIN CPNTROLLER
Route::post('/post_admin','AdminController@post_admin')->name('admin_post');
Route::get('/', 'AdminController@get_admin')->name('/');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/not_found', 'AdminController@page_404')->name('404');
Route::get('/contact', 'AdminController@contact')->name('contact');
Route::get('/settings','LocationController@edit_social')->name('settings')->middleware('auth');
Route::put('/social/','LocationController@update_social')->name('social');
Route::post('/settings/baner','AdminController@change_baner')->name('post.baner');
Route::get('/sortMenu','AdminController@menuStore')->name('menu.store');


//SECTION CONTROLLER
Route::post('/post/createsection','SectionController@create_section')->name('create_section');
Route::get('/admin', 'SectionController@get')->name('post')->middleware('auth');
Route::get('/news/{search?}','SectionController@show')->name('news');
Route::get('news/ajax_search/{search?}', 'SectionController@ajax_search');
Route::get('/news/single_view/{id}','SectionController@show_single_from_table')->name('single_view_from_table');




//POST CONTROLLER
Route::post('postnews','PostController@create')->name('postnews');
Route::put('/update/{id}','PostController@update')->name('update.post');
Route::get('/news/single/{id}','PostController@show')->name('show.news');
Route::get('/edit/{id}','PostController@edit')->name('edit.post');
Route::get('/news/delete/{id}', 'PostController@destroy')->name('destroy.post');
Route::get('userimage/{filename}','PostController@getImage')->name('get.image');
Route::get('baner/{filename?}','PostController@getbaner')->name('get.baner');
Route::get('all_posts', 'PostController@show_all')->name('all_posts');



//VIEW COMPOSER
View::composer('layout/sections', function($view)
{
    $news = App::make('App\Http\Controllers\ViewComposer')->get_sections();
    $view->with('news',$news);
});
View::composer('layout/popular_posts', function($view)
{
    $popular_posts = App::make('App\Http\Controllers\ViewComposer')->get_popular();
    $view->with('popular_posts',$popular_posts);
});

View::composer('layout/social', function($view)
{
    $socials = App::make('App\Http\Controllers\ViewComposer')->get_social();
    $view->with('social',$socials);
});

View::composer('layout/baner', function($view)
{
    $baner = App::make('App\Http\Controllers\ViewComposer')->get_baner();
    $view->with('baner',$baner);
});
