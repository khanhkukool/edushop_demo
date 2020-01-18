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

Route::get('/', function () {
    return view('welcome');
});
//
//Back-end
//

//Login
Route::get('/admin/login','backend\UserLoginController@index');

//Banner
Route::get('backend/banners/index','backend\BannerController@index');
Route::get('backend/banners/create','backend\BannerController@create');
Route::post('backend/banners/store','backend\BannerController@store');
Route::get('backend/banners/delete/{id}','backend\BannerController@delete');

//Categories
Route::get('backend/categories/index','backend\CategoryController@index');
Route::get('backend/categories/create','backend\CategoryController@create');
Route::post('backend/categories/store','backend\CategoryController@store');
Route::get('backend/categories/delete/{id}','backend\CategoryController@delete');
//khai báo thêm 1 route cho url trong ajjax
Route::get('backend/categories/getDetailCategory','backend\CategoryController@getDetailCategory');

//Detail_categories
Route::get('backend/detail_categories/index','backend\DetailCategoryController@index');
Route::get('backend/detail_categories/create','backend\DetailCategoryController@create');
Route::post('backend/detail_categories/store','backend\DetailCategoryController@store');
Route::get('backend/detail_categories/delete/{id}','backend\DetailCategoryController@delete');

//Products
Route::get('backend/products/index','backend\ProductController@index');
Route::get('backend/products/create','backend\ProductController@create');
Route::post('backend/products/store','backend\ProductController@store');
Route::get('backend/products/delete/{id}','backend\ProductController@delete');
Route::get('backend/products/edit/{id}','backend\ProductController@edit');
Route::get('backend/products/show/{id}','backend\ProductController@show');

//Users
Route::get('backend/users/index','backend\UserController@index');
Route::get('backend/users/create','backend\UserController@create');
Route::post('backend/users/store','backend\UserController@store');
Route::get('backend/users/delete/{id}','backend\UserController@delete');
Route::get('backend/users/edit/{id}','backend\UserController@edit');
Route::get('backend/users/show/{id}','backend\UserController@show');

//Videos
Route::get('backend/videos/index','backend\VideoController@index');
Route::get('backend/videos/create','backend\VideoController@create');
Route::post('backend/videos/store','backend\VideoController@store');
Route::get('backend/videos/delete/{id}','backend\VideoController@delete');

//Bills
Route::get('backend/bills/index','backend\BillController@index');
Route::get('backend/bills/create','backend\BillController@create');
Route::post('backend/bills/store','backend\BillController@store');
Route::get('backend/bills/delete/{id}','backend\BillController@delete');

//
//Front-end
//
Route::get('index','frontend\PageController@index');
Route::get('my_products','frontend\MyProductController@index');
Route::get('bills','frontend\BillController@index');

//Categories
Route::get('category/art','frontend\ArtController@index');
Route::get('category/design','frontend\DesignController@index');
Route::get('category/health','frontend\HealthController@index');
Route::get('category/infoOffice','frontend\InfoOfficeController@index');
Route::get('category/infoTechnology','frontend\InfoTechnologyController@index');
Route::get('category/languages','frontend\LanguageController@index');
Route::get('category/marketing','frontend\MarketingController@index');
Route::get('category/marriage','frontend\MarriageController@index');
Route::get('category/multi','frontend\MultiController@index');
Route::get('category/music','frontend\MusicController@index');
Route::get('category/skills','frontend\SkillController@index');
Route::get('category/startup','frontend\StartupController@index');

//Detail-product
Route::get('product/{title}/{id}','frontend\DetailProductController@index');

//Cart
Route::get('/cart/{id}','frontend\CartController@add');
Route::get('/cart','frontend\CartController@index');
Route::get('/cart/delete/{id}','frontend\CartController@delete');

//Login
Route::get('/login','frontend\LoginController@index');
Route::get('/get/login','frontend\LoginController@getLogin');

//Register
Route::get('/register','frontend\RegisterController@index');
Route::post('/register/create','frontend\RegisterController@create');

//
//test
//
Route::get('/napthe/index','frontend\NapTheController@index');
Route::post('/napthe/store','frontend\NapTheController@store');
