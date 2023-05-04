<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqQuestionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TagDetailController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/services', ServicesController::class)->name('services.index');
Route::get('/about-us', AboutController::class)->name('about.index');
Route::get('/booking', [BookingController::class,'index'])->name('booking.index');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact.index');
Route::get('/blog',BlogController::class)->name('blog.index');


Route::get('/posts/{slug}', BlogDetailController::class)->name('blog-detail');
Route::get('/tags/{slug}', TagDetailController::class)->name('tag-detail');
Route::get('/categories/{slug}', CategoryDetailController::class)->name('category-detail');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Category
    Route::delete('categories/destroy', [CategoryController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoryController::class);

    // Tag
    Route::delete('tags/destroy', [TagController::class, 'massDestroy'])->name('tags.massDestroy');
    Route::resource('tags', TagController::class);

    // Post
    Route::delete('posts/destroy', [PostController::class, 'massDestroy'])->name('posts.massDestroy');
    Route::post('posts/media', [PostController::class, 'storeMedia'])->name('posts.storeMedia');
    Route::post('posts/ckmedia', [PostController::class, 'storeCKEditorImages'])->name('posts.storeCKEditorImages');
    Route::resource('posts', PostController::class);

    // Service
    Route::delete('services/destroy', [ServiceController::class, 'massDestroy'])->name('services.massDestroy');
    Route::resource('services', ServiceController::class);

    // Package
    Route::delete('packages/destroy', [PackageController::class, 'massDestroy'])->name('packages.massDestroy');
    Route::post('packages/media', [PackageController::class, 'storeMedia'])->name('packages.storeMedia');
    Route::post('packages/ckmedia', [PackageController::class, 'storeCKEditorImages'])->name('packages.storeCKEditorImages');
    Route::resource('packages', PackageController::class);

    // Booking
    Route::delete('bookings/destroy', [BookingController::class, 'massDestroy'])->name('bookings.massDestroy');
    Route::resource('bookings', BookingController::class);

    // Setting

    Route::post('settings/media', [SettingController::class, 'storeMedia'])->name('settings.storeMedia');
    Route::post('settings/ckmedia', [SettingController::class, 'storeCKEditorImages'])->name('settings.storeCKEditorImages');
    Route::resource('settings', SettingController::class);

    // Faq Question
    Route::delete('faq-questions/destroy', [FaqQuestionController::class, 'massDestroy'])->name('faq-questions.massDestroy');
    Route::resource('faq-questions', FaqQuestionController::class);

    // Testimonial
    Route::delete('testimonials/destroy', [TestimonialController::class, 'massDestroy'])->name('testimonials.massDestroy');
    Route::resource('testimonials', TestimonialController::class);

    // Review
    Route::delete('reviews/destroy', [ReviewController::class, 'massDestroy'])->name('reviews.massDestroy');
    Route::resource('reviews', ReviewController::class);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
    }
});

require __DIR__.'/auth.php';