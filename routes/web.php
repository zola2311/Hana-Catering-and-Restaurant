<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuController;
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


    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/update/fixture',  [CategoryController::class, 'UpdateCategory'])->name('update.category');
        Route::get('/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menus.index');
        Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
        Route::post('/', [MenuController::class, 'store'])->name('menus.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/menu',  [MenuController::class, 'UpdateMenu'])->name('update.menu');
        Route::get('/delete/menu/{id}', [MenuController::class, 'DeleteMenuItem'])->name('delete.menu');

    });


});
Route::get('/notifications', 'NotificationController@getNotifications')->name('notifications.get');
Route::get('/booking_notification', [App\Http\Controllers\BookingController::class,'index'])->name('book_notifications.get');
Route::get('/delivery_notification', [App\Http\Controllers\DeliveryController::class,'index'])->name('delivery_notification.get');
Route::post('/booking', [App\Http\Controllers\BookingController::class,'booking'])->name('booking');
Route::post('/booking_update', [App\Http\Controllers\BookingController::class,'status'])->name('booking_status');
Route::post('/delivery_update', [App\Http\Controllers\DeliveryController::class,'status'])->name('deliver_status');
Route::post('/delivery', [App\Http\Controllers\DeliveryController::class,'delivery'])->name('delivery');
Route::get('/mark-as-read', [App\Http\Controllers\BookingController::class,'markAsBooking'])->name('mark-as-booking');
Route::get('/mark-as-deliver', [App\Http\Controllers\DeliveryController::class,'markAsDeliver'])->name('mark-as-deliver');
Route::get('/delivery/list', [App\Http\Controllers\DeliveryController::class,'index'])->name('delivery.list');
Route::get('/booking/index', [App\Http\Controllers\BookingController::class,'book'])->name('booking.index');
Route::get('/delivery/index', [App\Http\Controllers\DeliveryController::class,'deliver'])->name('delivery.index');
require __DIR__.'/auth.php';
