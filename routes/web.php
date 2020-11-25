<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checklogin;
use App\Http\Middleware\InitialMiddleware;


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

Route::get('/createuser',function(){
	return view('regpage');
});

Route::post('/createuser','UserController@createuser');
Route::post('/loguser','UserController@loguser');
Route::get('/', 'serviceMake@main_page')->middleware(InitialMiddleware::class);;

Route::middleware([Checklogin::class])->group(function () {
	Route::get('/tea-Inventory', 'InventoryController@teaInventory');
	Route::get('/dashboard', 'serviceMake@dashboard');

	Route::post('/login_check', 'serviceMake@login_check');
	Route::post('/broker', 'serviceMake@broker');
	Route::post('/tableLoad', 'serviceMake@tableload');
	Route::post('/profile_load', 'serviceMake@profile_load');
	Route::post('/select_tea_update_data', 'serviceMake@select_tea_update_data');
	Route::get('/tea_search', 'serviceMake@tea_search');
	Route::post('/lot_check', 'serviceMake@lot_check');
	Route::get('/blend_sheet_creator', 'serviceMake@blend_sheet_creator');
	Route::get('/generateExport','serviceMake@print_sheet');
	Route::get('/tea-Blend', 'serviceMake@tea_blend_unit');
	Route::get('/welc',function(){
		return view('welcome');
	});
	Route::get('/po-master', 'serviceMake@po_master');
	Route::post('/saveTea', 'serviceMake@tea_save');
	Route::post('/lotCheck', 'serviceMake@lot_no_check');
	Route::get('/logout', 'UserController@logout');

});



// Route::get('/tea-Inventory', 'InventoryController@teaInventory');

// Route::get('/tea-Inventory', 'InventoryController@teaGrade');



//Route::get('/tea-Inventory', 'serviceMake@tea_inventory');


/*-------------------------------- DATA STORE UNIT --------------------*/
