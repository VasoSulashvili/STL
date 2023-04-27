<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ArticleController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\EventController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PersonController;
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

Route::group(['prefix' => '{locale?}', 'middleware' => 'localization'], function(){
    
    
    /**
     * -----------------------------------------------------------
     * ====  Home Routes
     * -----------------------------------------------------------
     */
    Route::get('/', HomeController::class)->name('home');


    /**
     * -----------------------------------------------------------
     * ====  Contact Routes
     * -----------------------------------------------------------
     */
    Route::get('/contact', ContactController::class)->name('contact');


    /**
     * -----------------------------------------------------------
     * ====  About Us Routes
     * -----------------------------------------------------------
     */
    Route::get('/about', AboutController::class)->name('about');


    /**
     * -----------------------------------------------------------
     * ====  Events Routes
     * -----------------------------------------------------------
     */
    Route::get('/events', [EventController::class, 'index'])->name('events.index');


    /**
     * -----------------------------------------------------------
     * ====  Blog Routes
     * -----------------------------------------------------------
     */
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

   
    /**
     * -----------------------------------------------------------
     * ====  Category Routes
     * -----------------------------------------------------------
     */
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show'); 


    /**
     * -----------------------------------------------------------
     * ====  Persons Routes
     * -----------------------------------------------------------
     */
    Route::get('/persons', [PersonController::class, 'index'])->name('persons.index');
    Route::get('/persons/{person}', [PersonController::class, 'show'])->name('persons.show');
    Route::get('/team', [PersonController::class, 'team'])->name('persons.team');
    Route::get('/instructors', [PersonController::class, 'instructors'])->name('persons.instructors');
});

