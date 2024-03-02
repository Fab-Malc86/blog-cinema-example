<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ArticleController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;

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


// Home
Route::get('/', [PageController::class, 'home'])->name('home');


// Movies
Route::get('movies', [MovieController::class, 'movies'])->name('movies');

Route::get('movies/{id}', [MovieController::class, 'movie'])->name('movie');



// Articles

Route::get('articles', [ArticleController::class, 'articles'])->name('articles');

Route::get('articles/{id}', [ArticleController::class, 'article'])->name('article.view');







Route::get('about-us', [PageController::class, 'about-us'])->name('about-us');

Route::get('contacts', [ContactController::class, 'contacts'])->name('contacts');

Route::post('contacts', [ContactController::class, 'send'])->name('contacts.send');





// Route protected in case you are not logged

Route::middleware('auth')->prefix('account')->group(function () {

  Route::get('', [AccountController::class, 'account'])->name('account.view');

  // Route articles protected

  Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

  Route::put('articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');

  Route::delete('articles/{article}/delete', [ArticleController::class, 'destroy'])->name('articles.delete');

  Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

  Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

  Route::get('articles/test', [ArticleController::class, 'indexTest'])->name('articles-test.index');

  Route::post('articles/store', [ArticleController::class, 'store'])->name('articles.store');



  // Route movies protected
  Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movie.edit');

  Route::delete('movies/{movie}/delete', [MovieController::class, 'destroy'])->name('movie.delete');

  Route::get('movies/create', [MovieController::class, 'create'])->name('movie.create');

  Route::get('movies', [MovieController::class, 'index'])->name('movie.index');

  Route::post('movies/store', [MovieController::class, 'store'])->name('movie.store');


  // Route category protected
  // Rotte scritte manualmente

  // Route::get('articles/category', [CategoryController::class, 'index'])->name('articles.category');
  // Route::get('articles/category/create', [CategoryController::class, 'create'])->name('articles.category.create');
  // Route::post('articles/category/store', [CategoryController::class, 'store'])->name('articles.category.store');
  // Route::get('articles/category/{category}/edit', [CategoryController::class, 'edit'])->name('articles.category.edit');
  // Route::put('articles/category/{category}/update', [CategoryController::class, 'update'])->name('articles.category.update');
  // Route::delete('articles/category/{category}/delete', [CategoryController::class, 'destroy'])->name('articles.category.delete');

  // Rotte scritte con un metodo automatico di laravel
  // (attenzione ai name delle rotte, per vedere quelli scelti da laravel usare il comando "php artisan route:list"
  // nella console di comando )

  Route::resource('categories', CategoryController::class);
});
