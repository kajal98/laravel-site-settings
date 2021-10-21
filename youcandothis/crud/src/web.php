<?php

Auth::routes();
Route::get('user/activation/{token}', 'Auth\RegisterController@userActivation');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['web']], function () {
    Route::get("/", 'HomeController@index')->name('home');
});


Route::get('admin/login', 'Admin\SessionsController@getLogin')->name('admin.login');
Route::post('admin/login', 'Admin\SessionsController@postLogin');

Route::group(['middleware'=>['admin'], 'prefix'=>'admin', 'namespace'=>'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin-dashboard');
    Route::get('logout', 'SessionsController@getLogout')->name('admin.logout');
    Route::get('change-profile', 'SessionsController@getProfile')->name('change-profile');
    Route::post('change-profile', 'SessionsController@postProfile')->name('admin.change_profile');
    Route::get('change-password', 'SessionsController@getChangePassword')->name('get-change-pass');
    Route::post('change-password', 'SessionsController@postChangePassword')->name('change-pass');
    Route::resource('users', 'UsersController');
    Route::get('switchstatus/{id}', 'UsersController@switchStatus')->name('users.switch');
    Route::resource('blog_categories', 'BlogCategoryController');
    Route::resource('blogs', 'BlogController');
    Route::get('Blogswitchstatus/{id}', 'BlogController@switchStatus')->name('blogs.switch');
    Route::resource('extra', 'ExtrasController');
    Route::resource('faq', 'FaqsController');
    Route::resource('feedback', 'FeedbacksController');
    Route::resource('inquiry', 'InquiriesController');
    Route::resource('testimonial', 'TestimonialsController');
    Route::get('site-settings', 'DashboardController@site_settings')->name('site-settings-get');
    Route::post('site-settings', 'DashboardController@post_site_settings')->name('site-settings');
    Route::get('switch-status-of-feedback/{id}', 'DashboardController@switchStatus')->name('feedbacks.switch');
});
