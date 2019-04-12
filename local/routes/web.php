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

Route::get('/', [
    'as'=>'trang-chu',
	'uses'=>'MyController@getIndex'
]);

/* admin*/

Route::get('adindex', [
    'as'=>'adindex',
	'uses'=>'MyController@getAdindex'
]);
Route::get('adlogin', [
    'as'=>'adlogin',
	'uses'=>'MyController@getAdlogin'
]);
Route::post('adlogin',[
	'as'=>'adlogin',
	'uses'=>'MyController@postAdlogin'
]);
Route::get('adlogout',[
	'as'=>'adlogout',
	'uses'=>'MyController@getAdlogout'
]);

Route::get('adproduct', [
    'as'=>'adproduct',
	'uses'=>'MyController@getAdproduct'
]);
Route::get('adeditcategory', [
    'as'=>'adeditcategory',
	'uses'=>'MyController@getAdeditcategory'
]);
Route::get('adedit', [
    'as'=>'adedit',
	'uses'=>'MyController@getAdedit'
]);
Route::get('adeditproduct', [
    'as'=>'adeditproduct',
	'uses'=>'MyController@getAdeditproduct'
]);


Route::get('adaddproduct', [
    'as'=>'adaddproduct',
	'uses'=>'MyController@getAdaddproduct'
]);
Route::post('adaddproduct', [
    'as'=>'adaddproduct',
	'uses'=>'MyController@postAdaddproduct'
]);

Route::get('deluser/{id}', [
    'as'=>'deluser',
	'uses'=>'MyController@getdeluser'
]);

Route::get('addadmin', [
    'as'=>'addadmin',
	'uses'=>'MyController@getaddadmin'
]);
Route::post('addadmin', [
    'as'=>'addadmin',
	'uses'=>'MyController@postaddadmin'
]);
Route::get('adadd', [
    'as'=>'adadd',
	'uses'=>'MyController@getAdadd'
]);



/*page*/
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'MyController@getIndex'
]);

Route::get('about',[
	'as'=>'about',
	'uses'=>'MyController@getAbout'
]);

Route::get('cart',[
	'as'=>'cart',
	'uses'=>'MyController@getCart'
]);


Route::get('category-list{cloai}',[
	'as'=>'category-list',
	'uses'=>'MyController@getCategorylist'
]);

Route::get('compare',[
	'as'=>'compare',
	'uses'=>'MyController@getCompare'
]);

Route::get('contact',[
	'as'=>'contact',
	'uses'=>'MyController@getContact'
]);

Route::post('contact',[
	'as'=>'contact',
	'uses'=>'MyController@postContact'
]);

Route::get('login',[
	'as'=>'dangnhap',
	'uses'=>'MyController@getLogin'
]);

Route::post('login',[
	'as'=>'dangnhap',
	'uses'=>'MyController@postLogin'
]);


Route::get('product',[
	'as'=>'product',
	'uses'=>'MyController@getProduct'
]);
Route::get('register',[
	'as'=>'dangky',
	'uses'=>'MyController@getRegister'
]);
Route::post('register',[
	'as'=>'dangky',
	'uses'=>'MyController@postRegister'
]);

Route::get('logout',[
	'as'=>'dangxuat',
	'uses'=>'MyController@getLogout'
]);

Route::get('typography',[
	'as'=>'typography',
	'uses'=>'MyController@getTypography'
]);

Route::get('information',[
	'as'=>'information',
	'uses'=>'MyController@getInformation'
]);
Route::post('information',[
	'as'=>'information',
	'uses'=>'MyController@postInformation'
]);
Route::get('search',[
	'as'=>'search',
	'uses'=>'MyController@getSearch'
]);
Route::get('adcategory', [
    'as'=>'adcategory',
	'uses'=>'MyController@getAdcategory'
]);
Route::post('adcategory', [
    'as'=>'adcategory',
	'uses'=>'MyController@postAdcategory'
]);
Route::get('aduser',[
	'as'=>'aduser',
	'uses'=>'MyController@getAduser'
]);
Route::get('changeaduser/{id}',[
	'as'=>'changeaduser',
	'uses'=>'MyController@getChangeaduser'
]);
Route::post('changeaduser/{id}',[
	'as'=>'changeaduser',
	'uses'=>'MyController@postChangeaduser'
]);
Route::get('adeditcategory/{id}',[
    'as'=>'adeditcategory',
	'uses'=>'MyController@getAdeditcategory'
]);
Route::post('adeditcategory/{id}',[
    'as'=>'adeditcategory',
	'uses'=>'MyController@postAdeditcategory'
]);
Route::get('addeletecategory/{id}',[
    'as'=>'addeletecategory',
	'uses'=>'MyController@getAddeletecategory'
]);

Route::get('admin',[
	'as'=>'trangchu',
	'uses'=>'MyController@getadmin'
]);
Route::get('product/{id}',[
	'as'=>'product',
	'uses'=>'MyController@getsanpham'
]);

Route::get('product-detail/{id}',[
	'as'=>'productdetail',
	'uses'=>'MyController@getproductdetail'
]);

Route::group(['prefix' => 'admin'],function(){
		Route::group(['prefix' => 'user'],function(){
			Route::get('danhsach','MyController@getdanhsach');
			Route::get('them','MyController@getthem');
			Route::post('them','MyController@postthem');
			Route::get('sua/{id}','MyController@getsua');
			Route::post('sua/{id}','MyController@postsua');
			Route::get('xoa/{id}','MyController@getxoa');
		});

});

