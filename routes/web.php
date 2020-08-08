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
//
//Route::middleware('admin')->group(function (){
//
//});
//
//Route::get('/admin', function(){
//    return view('admin.pages.home');
//});

Route::group(['prefix'=>'yonetim'] , function (){

    Route::get('/','Admin\AdminController@index')->name('admin.home') ;

    Route::resource('/user','Admin\User\UserController') ;
    Route::get('/admins','Admin\User\UserController@admins')->name('user.admins') ;

    Route::resource('/about','Admin\AboutController') ;
    Route::resource('/setting','Admin\SettingController') ;
    Route::resource('/services','Admin\ServicesController') ;
    Route::resource('/gallery','Admin\ImageGaleryController') ;
    Route::resource('/information','Admin\InformationController') ;
    Route::resource('/category','Admin\Product\CategoryController') ;
    Route::resource('/product','Admin\Product\ProductController') ;
    Route::resource('/references','Admin\ReferencesController');

    Route::get('/productimageupload', 'Admin\Product\ProductController@imagesuploadpage')->name('product.images');
    Route::post('/productimagestore', 'Admin\Product\ProductController@imagestore')->name('product.imagestore');
    Route::post('/productimageupdate', 'Admin\Product\ProductController@imageupdate')->name('product.imageupdate');
    Route::get('/productimagefetch', 'Admin\Product\ProductController@imagefetch')->name('product.imagefetch');
    Route::get('/productimagedelete', 'Admin\Product\ProductController@imagedelete')->name('product.imagedelete');

    Route::resource('/options','Admin\Product\OptionController') ;
    Route::resource('/additionaloptions','Admin\Product\AdditionalOptionsController') ;
    Route::get('/statictics','Admin\StatisticsController@index')->name('statistics.index');

    Route::get('informationcat','Admin\InformationController@createcategory')->name('inform.category');
    Route::post('informationcat','Admin\InformationController@storecategory')->name('inform.addcategory');
    Route::get('informationcat/{id}','Admin\InformationController@editcategory')->name('inform.edit');
    Route::post('informationcat/{id}/edit','Admin\InformationController@updatecategory')->name('inform.update');
    Route::delete('informationcat/{id}','Admin\InformationController@deletecategory')->name('inform.delete');

    Route::get('/gallerys', 'Admin\ImageGaleryController@fetch')->name('gallery.fetch');
    Route::get('/galleryss', 'Admin\ImageGaleryController@delete')->name('gallery.delete');

});






    Route::get('/','Site\SiteController@index')->name('site.index');

    Route::get('/hakkımızda','Site\AboutController@index')->name('site.about') ;
    Route::get('/urunler','Site\Product\ProductsController@index')->name('site.product');
    Route::get('/{id}/{slug}',['as'=>'showProducts','uses'=>'Site\Product\ProductsController@show']) ;
    Route::get('/iletisim','Site\ContactController@index')->name('site.contact');
    Route::get('/giris','Site\LoginController@index')->name('site.login');
    Route::get('/kayıt','Site\SignUpController@index')->name('site.signup');
    Route::get('/galeri','Site\GalleryController@index')->name('site.gallery');
/*
Route::resource('/contact','site\ContactController');
Route::resource('/about','site\AboutController');*/


