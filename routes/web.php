<?php

use App\Http\Controllers\Admin\ArticleBackendController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\EventBackendController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OurProgramController;
use App\Http\Controllers\Frontend\ProfessionalController;
use App\Models\Certificate;
use App\Models\Message;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/about', [AboutUsController::class, 'index'])->name("about");
Route::get('/ourprogram', [OurProgramController::class, 'index'])->name("ourprogram");
Route::get('/professsionalteam', [ProfessionalController::class, 'index'])->name("professsionalteam");
Route::get('/career', [CareerController::class, 'index'])->name("career");
Route::get('/articles', [ArticleController::class, 'index'])->name("articles");
Route::get('/articles/{slug}', [ArticleController::class, 'showArticle'])->name("articles.show");
Route::get('/event', [EventController::class, 'index'])->name("event");
Route::get('/event/{slug}', [EventController::class, 'showEvent'])->name("event.show");

Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contact', [ContactController::class, 'contact'])->name('contact.contact');

Route::get('/lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('article_backend', ArticleBackendController::class)->except(['destroy', 'show']);
    Route::get('article_backend/delete/{id}', [ArticleBackendController::class, 'delete'])->name('article_backend.delete');

    Route::resource('event_backend', EventBackendController::class)->except(['destroy', 'show']);
    Route::get('event_backend/delete/{id}', [EventBackendController::class, 'delete'])->name('event_backend.delete');

    Route::resource('certificates', CertificateController::class)->except(['destroy', 'show']);
    Route::get('certificates/delete/{id}', [CertificateController::class, 'delete'])->name('certificates.delete');

    Route::resource('program', ProgramController::class)->except(['destroy', 'show']);
    Route::get('program/delete/{id}', [ProgramController::class, 'delete'])->name('program.delete');

    Route::resource('team', TeamController::class)->except(['destroy', 'show']);
    Route::get('team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');

    Route::resource('message', MessageController::class)->except(['destroy', 'show']);
    Route::get('message/delete/{id}', [MessageController::class, 'delete'])->name('message.delete');
});

require __DIR__ . '/auth.php';
