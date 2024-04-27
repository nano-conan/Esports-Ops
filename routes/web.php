<?php

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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


Route::get('/', function () {
    $games = Game::all()->reverse();
    return view('welcome', [
        'games' => $games
    ]);
});

Route::get('/games/{id}', function ($id) {
    // Get the markers as well
    return view('matches/show-match', [
        'logo' => 'storage/cbs-transparent.png',
        'game' => Game::find($id)
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/games', function (Request $request) {
    $formFields = $request->validate([
        'name' => 'required',
        'subtitle' => 'required',
        'description' => 'required',
        'mm' => 'required',
        'jungle' => 'required',
        'exp' => 'required',
        'mid' => 'required',
        'tank' => 'required',
        'video' => 'required'
    ]);

    $formFields['team'] = "CloudboundShadows";
    $formFields['video'] = $request->file('video')->store('public');

    if ($request->hasFile('icon')) {
        $formFields['icon'] = $request->file('icon')->store('public');
    }


    Game::create($formFields);

    return redirect('/')->with('message', 'Game uploaded successfully!');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/logout', function ($request) {
        uth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    });
});
