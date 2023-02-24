<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tiga;

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

//1
Route::get('/home', function () {
    return('Menampilkan halaman awal website');
});

//2
Route::prefix('products')->group(function () {
    Route::get('/marbel-edu-games', function () {
    // Matches The "/admin/users" URL
    return ('<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>');
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        // Matches The "/admin/users" URL
    return ('<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>');
    });
    Route::get('/riri-story-books', function () {
        // Matches The "/admin/users" URL
    return ('<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>');
    });
    Route::get('/kolak-kids-songs', function () {
        // Matches The "/admin/users" URL
    return ('<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>');
    });
});

//3
Route::get('/news/{url?}', function ($url = null) {
    // return('https://www.educastudio.com/news/'.$url);
    echo "https://www.educastudio.com/news/$url";
});

// Route::get('/news', [Tiga::class, 'news']);

//4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
    // Matches The "/admin/users" URL
    return ('<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>');
    });
    Route::get('/magang', function () {
        // Matches The "/admin/users" URL
        return ('<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>');
    });
    Route::get('/kunjungan', function () {
        // Matches The "/admin/users" URL
        return ('<a href="https://www.educastudio.com/program/kunjungan">https://www.educastudio.com/program/kunjungan</a>');
    });
});

//5
Route::get('/about-us', function () {
    return ('<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>');
});

//6
Route::resource('/contact', Tiga::class)->only([
    'index'
]);