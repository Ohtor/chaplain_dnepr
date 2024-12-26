<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/shield/military', function () {
    return view('shield.military.index');
})->name('shield.military.index');

Route::get('/shield/corporate', function () {
    return view('shield.corporate.index');
})->name('shield.corporate.index');

Route::get('/shield/hospital', function () {
    return view('shield.hospital.index');
})->name('shield.hospital.index');

Route::get('/shield/maritime', function () {
    return view('shield.maritime.index');
})->name('shield.maritime.index');

Route::get('/shield/municipal', function () {
    return view('shield.municipal.index');
})->name('shield.municipal.index');

Route::get('/shield/penitentiary', function () {
    return view('shield.penitentiary.index');
})->name('shield.penitentiary.index');

Route::get('/shield/police', function () {
    return view('shield.police.index');
})->name('shield.police.index');

Route::get('/shield/sports', function () {
    return view('shield.sports.index');
})->name('shield.sports.index');

Route::get('/mainarticle/assembly', function () {
    return view('mainarticle.assembly.index');
})->name('mainarticle.assembly.index');

Route::get('/mainarticle/arc', function () {
    return view('mainarticle.arc.index');
})->name('mainarticle.arc.index');

Route::get('/mainarticle/school', function () {
    return view('mainarticle.school.index');
})->name('mainarticle.school.index');

Route::get('/mainarticle/missionswerk', function () {
    return view('mainarticle.missionswerk.index');
})->name('mainarticle.missionswerk.index');

Route::get('/mainarticle/about_us', function () {
    return view('mainarticle.about_us.index');
})->name('mainarticle.about_us.index');

Route::get('/mainarticle/symbiosis', function () {
    return view('mainarticle.symbiosis.index');
})->name('mainarticle.symbiosis.index');

Route::get('/mainarticle/interaction_with_authorities', function () {
    return view('mainarticle.interaction_with_authorities.index');
})->name('mainarticle.interaction_with_authorities.index');


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "Подключение к базе данных успешно!";
    } catch (\Exception $e) {
        return "Ошибка подключения: " . $e->getMessage();
    }
});