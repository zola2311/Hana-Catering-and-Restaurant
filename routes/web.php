<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
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
    return view('frontend.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ContactController::class)->group(function () {
        Route::post('/store/message', 'StoreMessage')->name('store.message');
        Route::get('/contact/message', 'ContactMessage')->name('contact.message');
        Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
        Route::get('/view/message/{id}', 'ViewMessage')->name('view.message');
        Route::get('/messages/{id}/prev', 'ViewPrevMessage')->name('view.prev.message');
        Route::get('/messages/{id}/next', 'ViewNextMessage')->name('view.next.message');

    });
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/galleries/create',  'create')->name('images.upload');
        Route::post('/galleries',  'StoreMultiImage')->name('images.store');
        Route::get('/galleries/all',  'AllImages')->name('all.images');
        Route::Post('/update/images',  'UpdateImage')->name('update.image');
        Route::get('/edit/image/{id}',  'EditImage')->name('edit.image');
        Route::get('/delete/image/{id}',  'DeleteImage')->name('delete.image');
        Route::post('/delete-images',  'deletemultipleimages')->name('delete.images');
    });

});
Route::get('/notifications', 'NotificationController@getNotifications')->name('notifications.get');

require __DIR__.'/auth.php';
