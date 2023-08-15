<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/games/{id}', function () {
    return view('matches/show-match', [
        'logo' => 'storage/cbs-transparent.png',
        'game' => Game::find(id)
    ]);
});

Route::get('/', function () {
    return view('welcome', [
        'games' => [
            'game1' => [
                'name' => 'Outlaws',
                'subtitle' => 'Scrim 1',
                'icon' => 'storage/outlaws.png',
                'description' => 'Our first scrim as a team',
                'team' => 'Cloudbound Shadows',
                'mm' => 'Kin',
                'jungle' => 'Kairu',
                'exp' => 'Gully',
                'mid' => 'Conan',
                'tank' => 'A Mexican',
            ],
            'game2' => [
                'name' => 'Champions',
                'subtitle' => 'Scrim 1',
                'icon' => 'storage/champions.png',
                'description' => 'Another exciting match',
                'team' => 'Skyward Knights',
                'mm' => 'Ryu',
                'jungle' => 'Takashi',
                'exp' => 'Luna',
                'mid' => 'Hikari',
                'tank' => 'Samurai Jack',
            ],
            // Add more games here...
        ],
    ]);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
