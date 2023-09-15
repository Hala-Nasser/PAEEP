<?php

use App\Http\Controllers\Dashboard\AchievementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\Auth\ChangePasswordController;
use App\Http\Controllers\Dashboard\Auth\EmailVerificationController;
use App\Http\Controllers\Dashboard\Auth\ForgetPasswordController;
use App\Http\Controllers\Dashboard\Auth\LogoutController;
use App\Http\Controllers\Dashboard\CompanyRequestController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\Dashboard\DonationController;
use App\Http\Controllers\Dashboard\JobRequestController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProgramController;
use App\Http\Controllers\Dashboard\ReportsController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\VisualLibraryController;
use App\Http\Controllers\Dashboard\VisualLibraryMediaController;
use App\Http\Controllers\Dashboard\VolunteerRequestController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    dd(12);
    return view('welcome');

});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::prefix('dashboard/')->middleware('guest:admin')->group(function () {
        Route::get('login', [LoginController::class, 'showLogin'])->name('dashboard.login');
        Route::post('login', [LoginController::class, 'login']);
    });

    Route::middleware('guest:admin')->group(function () {
        Route::get('forget-password', [ForgetPasswordController::class, 'showForgetPassword'])->name('password.forget');
        Route::post('forget-password', [ForgetPasswordController::class, 'sendResetEmail']);
        Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPassword'])->name('password.reset');
        Route::post('reset-password', [ForgetPasswordController::class, 'resetPassword']);
    });

    Route::prefix('dashboard/')->middleware('auth:admin')->group(function () {
        Route::get('verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');
        Route::post('verification-notification', [EmailVerificationController::class, 'send'])->name('verification.send');
        Route::get('verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
    });

    Route::middleware(['auth:admin', 'verified'])->prefix('dashboard/')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::resource('admin', AdminController::class);
        Route::resource('achievement', AchievementController::class);
        Route::resource('company-request', CompanyRequestController::class)->except('edit');
        Route::resource('contact-us', ContactUsController::class);
        Route::resource('donation', DonationController::class);
        Route::resource('job-request', JobRequestController::class);
        Route::resource('news', NewsController::class);
        Route::resource('partner', PartnerController::class);
        Route::resource('program', ProgramController::class);
        Route::resource('report', ReportsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('visual-library', VisualLibraryController::class);
        // Route::resource('visual-library-media', VisualLibraryMediaController::class);
        Route::resource('volunteer-request', VolunteerRequestController::class);
    Route::delete('visual-library-media/{visual_library_media}', [VisualLibraryController::class, 'deleteMedia']);


        Route::get('about', [SettingController::class, 'about'])->name('about');
        Route::get('vision', [SettingController::class, 'vision'])->name('vision');
        Route::get('message', [SettingController::class, 'message'])->name('message');
        Route::get('principle', [SettingController::class, 'principle'])->name('principle');
        Route::get('objective', [SettingController::class, 'objective'])->name('objective');
        Route::get('contact-info', [SettingController::class, 'contactInfo'])->name('contact-info');
        Route::get('social-media', [SettingController::class, 'socialMedia'])->name('social-media');
        Route::post('update-setting', [SettingController::class, 'update']);




        Route::get('logout', [LogoutController::class, 'logout'])->name('admin.logout');
        Route::get('change-password', [ChangePasswordController::class, 'showChangePassword'])->name('admin.change-password');
        Route::post('change-password', [ChangePasswordController::class, 'changePassword']);
        // Route::resource('role', RoleController::class);
        // Route::resource('permission', PermissionController::class);

        // Route::get('role/{role}/permissions', [RoleController::class, 'editRolePermissions'])->name('role.edit-permissions');
        // Route::put('role/{role}/permissions', [RoleController::class, 'updateRolePermissions']);
    });
});
