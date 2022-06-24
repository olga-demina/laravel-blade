<?php

use Faker\Provider\Lorem;
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
        'user' => [
            'name' => 'Olga',
            'lastname' => 'Demina'
        ],
        'classes' => [
            [
                'number' => 48,
                'students_number' => 34
            ],
            [
                'number' => 62,
                'students_number' => 35
            ]
        ]
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/notizie', function () {
    $data = [
        'news' => [
            [
                'title' => 'Titolo 1',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id earum deleniti quia dolores quaerat quisquam debitis neque exercitationem nihil vel minus molestias rerum, maxime ratione non, dignissimos, saepe soluta adipisci?'
            ],
            [
                'title' => 'Titolo 2',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id earum deleniti quia dolores quaerat quisquam debitis neque exercitationem nihil vel minus molestias rerum, maxime ratione non, dignissimos, saepe soluta adipisci?'
            ],
        ],
        'products' => [
            [
                'name' => 'Prodotto 1',
                'description' => 'Descrizione'
            ],
            [
                'name' => 'Prodotto 2',
                'description' => 'Descrizione'
            ]
        ]
    ];
    return view('news', $data);
})->name('news');
