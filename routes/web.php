<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LoansFormComponent;
use App\Http\Livewire\LoansComponent;

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


Route::get('/', HomeComponent::class);
Route::get('/loansform', LoansFormComponent::class);
Route::get('/loans', LoansComponent::class);
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('/');
Route::get('single-news/{id}', [AdminController::class, 'showSingleNews']);
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');

        //Home Slider Web
        Route::get('slidershow',[AdminController::class,'show'])->name('admin.slidershow');
        Route::get('addsliders',[AdminController::class,'addSlider'])->name('admin.addsliders');
        Route::post('addsliders',[AdminController::class,'Upload']);
        Route::get('delete/{id}', [AdminController::class, 'deleteSlide'])->name('admin.delete');

        //Notice Web 
        Route::get('addnotice', [AdminController::class, 'noticeIndex']);
        Route::post('addnotice', [AdminController::class, 'noticeStore'])->name('admin.addnotice');   
        Route::get('shownotice', [AdminController::class, 'showNotice'])->name('admin.shownotice');  

        //Home News
        Route::get('shownews', [AdminController::class, 'NewsShow'])->name('admin.shownews');
        Route::get('addnews', [AdminController::class, 'addNews'])->name('admin.addnews');
        Route::post('addnews', [AdminController::class, 'PostNews']);
        Route::get('editnews/{id}', [AdminController::class, 'editNews']);
        Route::post('editnews/{id}', [AdminController::class, 'UpdateNews'])->name('admin.editnews');
        Route::get('deletenews/{id}', [AdminController::class, 'deleteNews'])->name('admin.deletenews');

       
});

Route::group(['prefix'=>'user','middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('/',[UserController::class,'index'])->name('/');
   
    
});
