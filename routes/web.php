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
/*
Route::get('/', function () {
//    return view('welcome2');
});
Route::get('/', function() 
{
return 'Welcome to our home page!';
});
*/

/*Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/about2', 'PagesController@about2');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
*/

Route::get('/index', 'ProductController@index');

Route::get('/', 'ProductController@index');
Route::get('/product_detail/{no}', 'ProductController@show');

Route::get('/cart', 'CartController@index');
Route::get('/add_cart/{product_id}', 'CartController@add');
Route::get('/del_cart/{product_id}', 'CartController@delete');

Route::get('/register', 'MemberController@register');
Route::get('/login', 'MemberController@login');
Route::post('/register', 'MemberController@register_do');
Route::post('/login', 'MemberController@login_do');

Route::get('/member_edit', 'MemberController@edit');
Route::post('/member_edit', 'MemberController@update');
 

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/product/', 'ProductManagerController@index');
Route::get('/admin/product/edit/{no}', 'ProductManagerController@edit');
Route::post('/admin/product/edit/{no}', 'ProductManagerController@update_do');
Route::get('/admin/product/add/', 'ProductManagerController@add');
Route::post('/admin/product/add/', 'ProductManagerController@add_do');
Route::get('/admin/product/delete/{no}', 'ProductManagerController@delete');



Route::get('/admin/member/', 'MemberManagerController@index');
Route::get('/admin/member/edit/{no}', 'MemberManagerController@edit');
Route::post('/admin/member/edit/{no}', 'MemberManagerController@update_do');
Route::get('/admin/member/add/', 'MemberManagerController@add');
Route::post('/admin/member/add/', 'MemberManagerController@add_do');
Route::get('/admin/member/delete/{no}', 'MemberManagerController@delete');



Route::get('/admin/admin/', 'AdminManagerController@index');
Route::get('/admin/admin/edit/{no}', 'AdminManagerController@edit');
Route::post('/admin/admin/edit/{no}', 'AdminManagerController@update_do');
Route::get('/admin/admin/add/', 'AdminManagerController@add');
Route::post('/admin/admin/add/', 'AdminManagerController@add_do');
Route::get('/admin/admin/delete/{no}', 'AdminManagerController@delete');


