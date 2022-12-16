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

Route::get('/', function () {
    $data = [
        'page_title' => 'Welcome to la Molisana',
        'page_intro' => 'La molisana lorem ipsum dolor'
    ];
    return view('welcome', $data);
})->name('home');

Route::get('/products', function () {

    $products_collection = collect(config('db.products'));
    //dd($products);
    $pasta_corta = $products_collection->where('tipo', '===', 'corta');
    //dd($pasta_corta);
    $pasta_cortissima = $products_collection->where('tipo', '===', 'cortissima');
    //dd($pasta_cortissima);
    $pasta_lunga = $products_collection->where('tipo', '===', 'lunga');
    //dd($pasta_lunga);

    $data = [
        'products' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];


    return view('products', $data);
})->name('products');


Route::get('/news', function () {
    $posts = config('db.posts');
    //dd($posts);
    $data = [
        'page_title' => 'About la Molisana',
        'page_intro' => 'La molisana lorem ipsum dolor',
        'posts' => $posts
    ];
    return view('news', $data);
})->name('news');
