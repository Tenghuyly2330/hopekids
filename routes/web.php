<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ArticleBackendController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CareerBackendController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\EventBackendController;
use App\Http\Controllers\Admin\ExperinceController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SocialController;
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
use App\Models\Experince;
use App\Models\Message;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/about', [AboutUsController::class, 'index'])->name("about");
Route::get('/ourprogram', [OurProgramController::class, 'index'])->name("ourprogram");
Route::get('/professionalteam', [ProfessionalController::class, 'index'])->name("professionalteam");
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

    Route::resource('banner', BannerController::class)->except(['destroy', 'show']);

    Route::resource('faq', FaqController::class)->except(['destroy', 'show']);
    Route::get('faq/delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');

    Route::resource('about_backend', AboutController::class)->except(['destroy', 'show']);

    Route::resource('parent', ParentController::class)->except(['destroy', 'show']);
    Route::get('parent/delete/{id}', [ParentController::class, 'delete'])->name('parent.delete');

    Route::resource('branch', BranchController::class)->except(['destroy', 'show']);
    Route::get('branch/delete/{id}', [BranchController::class, 'delete'])->name('branch.delete');

    Route::resource('career_backend', CareerBackendController::class)->except(['destroy', 'show']);
    Route::get('career_backend/delete/{id}', [CareerBackendController::class, 'delete'])->name('career_backend.delete');

    Route::resource('social', SocialController::class)->except(['destroy', 'show']);

    Route::resource('experince', ExperinceController::class)->except(['destroy', 'show']);

});


require __DIR__ . '/auth.php';
