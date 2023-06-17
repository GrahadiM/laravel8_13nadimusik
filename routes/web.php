<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DiscoverController;
use App\Http\Controllers\Admin\NewReleaseController;
use App\Http\Controllers\Admin\ChanelController;
use App\Http\Controllers\Admin\BrowseAllController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\DemoController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CareerFormController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingWebsiteController;
use App\Http\Controllers\Admin\TermsOfServiceController;

Route::controller(FrontendController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('results', 'results')->name('results');
    Route::get('watch/{id}', 'watch')->name('watch');
    Route::get('artist', 'artist')->name('artist');
    Route::get('artist/{id}', 'artist_detail')->name('artist_detail');
    Route::get('news', 'news')->name('news');
    Route::get('news_detail/{id}', 'news_detail')->name('news_detail');
    Route::get('event', 'event')->name('event');
    Route::get('event_detail/{id}', 'event_detail')->name('event_detail');
    Route::get('demo', 'demo')->name('demo');
    Route::post('demo_form', 'demo_form')->name('demo_form');
    Route::get('about', 'about')->name('about');
    Route::get('career', 'career')->name('career');
    Route::get('career_detail/{id}', 'career_detail')->name('career_detail');
    Route::get('career_form/{id}', 'career_show')->name('career_show');
    Route::post('career_form', 'career_form')->name('career_form');
    Route::get('terms-of-services', 'terms_of_services')->name('terms_of_services');
    Route::get('privacy-policy', 'privacy_policy')->name('privacy_policy');
    Route::get('switch_language/{language}', 'switch_language')->name('switch_language');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::controller(ProfileController::class)->prefix('profile')->name('profile.')->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
        Route::post('upload', 'upload')->name('upload');
        Route::put('password', 'password')->name('password');
    });

    Route::middleware('admin')->group(function () {
        Route::prefix('admin')->name('admin.')->group(function () {

            Route::prefix('home')->name('home.')->group(function () {
                Route::resource('discover', DiscoverController::class);
                Route::resource('new_release', NewReleaseController::class);
                Route::resource('our_chanel', ChanelController::class);
                Route::resource('browse_all', BrowseAllController::class);
            });

            Route::resource('artist', ArtistController::class);
            Route::resource('news', NewsController::class);
            Route::resource('event', EventController::class);
            Route::resource('demo', DemoController::class);
            Route::resource('about', AboutController::class);
            Route::resource('career', CareerController::class);
            Route::resource('career_form', CareerFormController::class);

            Route::middleware('administrator')->group(function () {
                Route::resource('user', UserController::class);
                Route::resource('terms_of_service', TermsOfServiceController::class);
                Route::resource('privacy_policy', PrivacyPolicyController::class);
                Route::controller(SettingWebsiteController::class)->prefix('setting')->name('setting.')->group(function () {
                    Route::get('website', 'index')->name('index');
                    Route::put('website/{admin_website}', 'update')->name('update');
                });
            });

            Route::get('/clear', function () {
                Artisan::call('cache:clear');
                Artisan::call('config:clear');
                Artisan::call('config:cache');
                Artisan::call('view:clear');
                Artisan::call('optimize');

                return redirect()->back()->with('success', 'Cleared!');
            })->name('clear');
        });
    });

});
