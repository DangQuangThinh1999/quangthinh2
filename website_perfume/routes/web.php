<?php

use Illuminate\Support\Facades\Route;

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
//Khách hàng: frontend
Route::get('/', 'HomeController@index' );
Route::get('/trangchu','HomeController@index');

//Admin: backend
//Pương thức Get
Route::get('/admin/login','AdminController@login_page');
Route::get('/admin/register','AdminController@register_page');
Route::get('/admin/password','AdminController@password_page');
Route::get('/admin/tables','AdminController@tables_page');
Route::get('/admin/charts','AdminController@charts_page');

Route::get('/admin','AdminController@admin_index');

Route::get('/logout','AdminController@logout_page');

Route::post('/admin/home','AdminController@admin_home');


Route::get('/ThemSP','CategoryProductController@add_category_product');

Route::get('/XemSP','CategoryProductController@view_category_product');

Route::post('/LuuSP','CategoryProductController@save_category_product');


Route::get('/SuaSP/{category_product_id}','CategoryProductController@edit_category_product');

Route::get('/XoaSP/{category_product_id}','CategoryProductController@delete_category_product');

Route::post('/CapNhatSP/{category_product_id}','CategoryProductController@update_category_product');