<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSettingsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactSettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperiencesController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\FeedBackSettingsController;
use App\Http\Controllers\Admin\FooterContactInfoController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterSocialLinksController;
use App\Http\Controllers\Admin\FooterUsefulLinkController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSettingsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillItemsController;
use App\Http\Controllers\Admin\SkillSectionSettingsController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware("auth");

Route::get('/blog', function () {
    return view('frontend.blog');
});


Route::get('/dashboard', [DashboardController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("portfolio-details/{id}", [HomeController::class, "showPortfolio"])->name("home.show-portfolio");
Route::get("blog-details/{id}", [HomeController::class, "showBlog"])->name("home.show-blog");
Route::get("blogs", [HomeController::class, "blogs"])->name("home.blogs");
Route::post("contact", [HomeController::class, "contact"])->name("home.contact");

/*** Admin Routes */
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    /*** Hero Section Routes */
    Route::resource("hero", HeroController::class);
    Route::resource("typer-title", TyperTitleController::class);

    /*** Service Section Routes */
    Route::resource("service", ServiceController::class);

    /*** About Section Routes */
    Route::get("resume-download", [AboutController::class, "resume_download"])->name("resume.download");
    Route::resource("about", AboutController::class);

    /*** Portfolio Category Routes */
    Route::resource("category", CategoryController::class);

    /*** Portfolio Item Routes */
    Route::resource("portfolio-item", PortfolioItemController::class);

    /*** Portfolio Section Settings Routes */
    Route::resource("portfolio-section-setting", PortfolioSectionSettingsController::class);

    /*** Skill Section Settings Routes */
    Route::resource("skills-section-settings", SkillSectionSettingsController::class);

    /*** Skill Items Routes */
    Route::resource("skills-items", SkillItemsController::class);

    /*** Experiences Routes */
    Route::resource("experiences", ExperiencesController::class);

    /*** FeedBack Routes */
    Route::resource("feedback", FeedBackController::class);

    /*** FeedBack Section Settings Routes */
    Route::resource("feedback-section-settings", FeedBackSettingsController::class);

    /*** Blog Category Routes */
    Route::resource("blog-category", BlogCategoryController::class);

    /*** Blog Routes */
    Route::resource("blog", BlogController::class);

    /*** Blog Section Settings Routes */
    Route::resource("blog-section-settings", BlogSettingsController::class);

    /*** Contact Section Settings Routes */
    Route::resource("contact-section-settings", ContactSettingsController::class);

    /*** Footer Social Routes */
    Route::resource("footer-social", FooterSocialLinksController::class);

    /*** Footer Info Routes */
    Route::resource("footer-info", FooterInfoController::class);

    /*** Footer Contact Routes */
    Route::resource("footer-contact-info", FooterContactInfoController::class);

    /*** Footer Useful Links Routes */
    Route::resource("footer-useful-links", FooterUsefulLinkController::class);
});
