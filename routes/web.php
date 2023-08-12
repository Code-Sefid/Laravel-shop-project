<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'welcome']);
Route::get('/about', function(){
    return view("about");  
});
Route::get('/contact', function(){
    return view("contact");  
});
Route::get('/detail/{slug}', [ProductController::class, 'detail']);


Route::controller(ProductController::class)->group(function(){
    Route::get('/admin', 'index')->name('product.form');
    Route::get('/admin/product', 'list');
    Route::get('/admin/product/delete/{slug}', 'delete');
    Route::post('/admin/product', 'store')->name('product.store');

    Route::get('/admin/slider', 'sliders');
    Route::get('/admin/slider/delete/{id}', 'sliderdelete');
    Route::post('/admin/slider', 'storeslider')->name('slider.store');

    Route::get('/admin/category', 'categories');
    Route::get('/admin/category/delete/{id}', 'categorydelete');
    Route::post('/admin/category', 'storecategory')->name('category.store');
});
