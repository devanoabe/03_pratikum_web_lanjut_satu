<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| routes are loaded by the RouteServiceProvider and all of them will
|
| Here is where you can register web routes for your application. These
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home',[SiteController::class, 'home']);

Route::prefix('product')->group(function() {
    Route::get('/',[SiteController::class, 'product']);
    Route::get('category/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('category/marbel-and-friends-kids-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('category/riri-story-books-animations', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    });

    Route::get('category/kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

Route::get('/news',[SiteController::class, 'news']);

//akses link news dengan judul berparameter title
Route::get('news/{title}', function ($title) {
    return redirect('https://www.educastudio.com/news/'.$title);
});

Route::prefix('program')->group(function() {
    Route::get('/',[SiteController::class, 'program']);
    Route::get('/karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });

    Route::get('/magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });

    Route::get('/kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::get('/aboutUs',[SiteController::class, 'aboutUs']);

Route::resource('/contactUs', SiteController::class)->only([
    'index',
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>  