<?php

use App\Http\Livewire\Absens;
use App\Http\Livewire\Mapels;
use App\Models\Absen;
use App\Models\Mapel;
use Carbon\Carbon;
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
    return view('landing');
})->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        // Absen
        $absen = Absen::where('tanggal', Carbon::today())->get();
        $absencount = $absen->count();

        // Mapel
        $mapel = Mapel::get();
        $mapelcount = $mapel->count();

        return view('dashboard', ['absencount' => $absencount, 'mapelcount' => $mapelcount]);
    })->name('dashboard');

    Route::get('absen', Absens::class)->name('absen');
    Route::get('mapel', Mapels::class)->name('mapel');
});
