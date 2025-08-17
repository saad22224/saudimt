<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('index');
});


Route::post('participations', [MailController::class, 'participations'])->name('participations');






Route::get('/lang/{locale}', function (string $locale) {
    if (! in_array($locale, ['ar', 'en'])) {
        abort(400);
    }

    App::setLocale($locale);


    session(['locale' => $locale]);
    // dd('Locale set to ' . $locale);
    return redirect()->back();
})->name('lang');
