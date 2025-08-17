<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\MailController;
use App\Models\Image;
use App\Models\Media;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Speaker;
use Illuminate\Http\Request;


Route::get('/', function () {
    $speakers = Speaker::all();
    $medias = Media::all();
    $images = Image::all();
    return view('index', compact('speakers' , 'medias'  , 'images'));
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






Route::get('/saudimtadmin', function () {
    return view('admin.login');
});
Route::get('/admin/dashboard', [AdminAuth::class, 'dashboard'])
    ->name('admin.dashboard');
Route::post('/admin/login', [AdminAuth::class, 'login'])
    ->name('admin.login');
Route::post('/admin/logout', [AdminAuth::class, 'logout'])
    ->name('admin.logout');



Route::get('admin/speakers', function () {
    $speakers = Speaker::all();
    return view('admin.speakers', compact('speakers'));
})->name('admin.speakers');

Route::post('admin/speakers', function (Request $request) {
    $request->validate([
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'required|image',
    ]);

    $image = $request->file('image');
    $imageName = $image->getClientOriginalName();

    // تخزين الصورة في storage/app/public/speakers
    $imagePath = $image->storeAs('speakers', $imageName, 'public');

    // تخزين البيانات في قاعدة البيانات
    $speaker = new Speaker();
    $speaker->name_en = $request->name_en;
    $speaker->name_ar = $request->name_ar;
    $speaker->image = $imagePath; // هنا بنخزن المسار في قاعدة البيانات
    $speaker->save();

    return redirect()->back()->with('success', 'تم إضافة المتحدث بنجاح!');
})->name('speakers.store');

Route::delete('admin/deletespeakers/{id}', function ($id) {
    $speakers = Speaker::find($id);
    $speakers->delete();
    return redirect()->back();
})->name('admin.deletespeaker');






Route::get('admin/media', function () {
    $medias = Media::all();
    return view('admin.media', compact('medias'));
})->name('admin.media');

Route::post('admin/media', function (Request $request) {
    $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
        'desc_ar' => 'required',
        'desc_en' => 'required',
        'image' => 'required|image',
    ]);

    $image = $request->file('image');
    $imageName = $image->getClientOriginalName();

    // تخزين الصورة في storage/app/public/speakers
    $imagePath = $image->storeAs('media', $imageName, 'public');

    // تخزين البيانات في قاعدة البيانات
    $media = new Media();
    $media->title_ar = $request->title_ar;
    $media->title_en = $request->title_en;
    $media->desc_ar = $request->desc_ar;
    $media->desc_en = $request->desc_en;
    $media->image = $imagePath; // هنا بنخزن المسار في قاعدة البيانات
    $media->save();

    return redirect()->back()->with('success', 'تم إضافة المتحدث بنجاح!');
})->name('media.store');

Route::delete('admin/deletemedia/{id}', function ($id) {
    $media = Media::find($id);
    $media->delete();
    return redirect()->back();
})->name('admin.deletemedia');






















Route::get('admin/images', function () {
    $images = Image::all();
    return view('admin.images', compact('images'));
})->name('admin.images');

Route::post('admin/images', function (Request $request) {
    $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
        'image' => 'required|image',
    ]);

    $image = $request->file('image');
    $imageName = $image->getClientOriginalName();

    // تخزين الصورة في storage/app/public/speakers
    $imagePath = $image->storeAs('images', $imageName, 'public');

    // تخزين البيانات في قاعدة البيانات
    $image = new Image();
    $image->title_ar = $request->title_ar;
    $image->title_en = $request->title_en;
    $image->image = $imagePath; // هنا بنخزن المسار في قاعدة البيانات
    $image->save();

    return redirect()->back()->with('success', 'تم إضافة المتحدث بنجاح!');
})->name('images.store');

Route::delete('admin/deleteimage/{id}', function ($id) {
    $image = Image::find($id);
     $image->delete();
    return redirect()->back();
})->name('admin.deleteimage');
