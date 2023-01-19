<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\BlogController as DashboardBlogController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\LatestWorksController;
use App\Http\Controllers\Dashboard\PlansController;
use App\Http\Controllers\Dashboard\projectsController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\TestimonialsController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\TeamsController;
use App\Http\Controllers\MultiCreativeController;
use App\Http\Controllers\MultiDigitalController;
use App\Http\Controllers\MultipageDesignController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamDetailsController;
use App\Models\latestwork;
use App\Models\project_category;
use App\Models\team;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MultiCreativeController::class,'index']);
Route::post('/',[MultiCreativeController::class,'index'])->name('home.view');
// Route::get('/home',[MultiCreativeController::class,'index']);

Route::get('/services',[ServicesController::class,'index'])->name('services.view');
Route::get('/services',[ServicesController::class,'index'])->name('services.view');
Route::get('/contact',[ContactController::class,'index'])->name('contact.view');
Route::post('/contact',[ContactController::class,'store'])->name('contact.action.view');
Route::get('/servicesdetails',[ServicesController::class,'read'])->name('servicesdetails.view');
Route::get('/aboutus',[AboutUsController::class,'index'])->name('aboutus.view');
Route::get('/ourteam',[OurTeamController::class,'index'])->name('ourteam.view');
Route::get('/teamdetails',[TeamDetailsController::class,'index'])->name('teamdetails.view');
Route::get('/portfolio',[portfolioController::class,'index'])->name('portfolio.view');
Route::get('/portfolio-details/{id?}',[portfolioController::class,'read'])->name('portfoliodetails.view');
Route::get('/blog',[blogController::class,'index'])->name('blogs.view');
Route::get('/blog-details',[blogController::class,'read'])->name('blogs-details.view');

Route::post('/store',[blogController::class,'store'])->name('comment.action');
Route::get('/multidesign',[MultipageDesignController::class,'index'])->name('Mstudiodesign.view');
Route::get('/onedesign',[MultipageDesignController::class,'index2'])->name('Ostudiodesign.view');
Route::get('/multicreative',[MultiCreativeController::class,'index'])->name('multicreative.view');
Route::get('/onecreative',[MultiCreativeController::class,'index2'])->name('onecreative.view');
Route::get('/multidigital',[MultiDigitalController::class,'index'])->name('multidigital.view');
Route::get('/onedigital',[MultiDigitalController::class,'index2'])->name('onedigital.view');
Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('auth.view');
    Route::post('/login',[AuthController::class,'authunticate'])->name('auth.action.view');
    
});
Route::post('/logout',[AuthController::class,'logout'])->name('logout.view')->middleware('auth');


// Dashboard Routes

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('view');

    // Sections
    Route::prefix('sections')->name('section.')->group(function () {
        // hero section
        Route::get('/hero', [SectionController::class, 'hero'])->name('hero.view');
        Route::post('/hero', [SectionController::class, 'hero'])->name('hero.action');
        // what-we-do section
        Route::get('/whatwedo', [SectionController::class, 'whatwedo'])->name('whatwedo.view');
        Route::post('/whatwedo', [SectionController::class, 'whatwedo'])->name('whatwedo.action');
        // what-we-do section
        Route::get('/howweare', [SectionController::class, 'howweare'])->name('howweare.view');
        Route::post('/howweare', [SectionController::class, 'howweare'])->name('howweare.action');
        // process section
        Route::get('/processe', [SectionController::class, 'processe'])->name('processe.view');
        Route::post('/processe', [SectionController::class, 'processe'])->name('processe.action');
        // about-us section
        Route::get('/aboutus', [SectionController::class, 'aboutus'])->name('aboutus.view');
        Route::post('/aboutus', [SectionController::class, 'aboutus'])->name('aboutus.action');
        // working-module section
        Route::get('/workmodule', [SectionController::class, 'workmodule'])->name('workmodule.view');
        Route::post('/workmodule', [SectionController::class, 'workmodule'])->name('workmodule.action');
         // agency-statistic section
         Route::get('/agencystatistic', [SectionController::class, 'agencystatistic'])->name('agencystatistic.view');
         Route::post('/agencystatistic', [SectionController::class, 'agencystatistic'])->name('agencystatistic.action');
         // contact details section
        Route::get('/getintouch', [SectionController::class, 'getintouch'])->name('getintouch.view');
        Route::post('/getintouch', [SectionController::class, 'getintouch'])->name('getintouch.action');
        //feautre
        Route::get('/feature', [SectionController::class, 'feature'])->name('feature.view');
        Route::post('/feature', [SectionController::class, 'feature'])->name('feature.action');
    });

    

    Route::prefix('testimonials')->name('testimonials.')->group(function () {
        Route::get('/', [TestimonialsController::class, 'index'])->name('list.view');
        Route::get('/create', [TestimonialsController::class, 'create'])->name('create.view');
        Route::post('/store', [TestimonialsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialsController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [TestimonialsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TestimonialsController::class, 'delete'])->name('delete');
    });
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', [projectsController::class, 'index'])->name('list.view');
        Route::get('/create', [projectsController::class, 'create'])->name('create.view');
        Route::post('/store', [projectsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [projectsController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [projectsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [projectsController::class, 'delete'])->name('delete');
    });
    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('list.view');
        Route::get('/create', [ServiceController::class, 'create'])->name('create.view');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');
    });
    Route::prefix('plans')->name('plans.')->group(function () {
        Route::get('/', [PlansController::class, 'index'])->name('list.view');
        Route::get('/create', [PlansController::class, 'create'])->name('create.view');
        Route::post('/store', [PlansController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PlansController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [PlansController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [PlansController::class, 'delete'])->name('delete');
    });
    Route::prefix('blogs')->name('blogs.')->group(function () {
        Route::get('/', [DashboardBlogController::class, 'index'])->name('list.view');
        Route::get('/create', [DashboardBlogController::class, 'create'])->name('create.view');
        Route::post('/store', [DashboardBlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DashboardBlogController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [DashboardBlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [DashboardBlogController::class, 'delete'])->name('delete');
    });
    Route::prefix('team')->name('team.')->group(function () {
        Route::get('/', [DashboardBlogController::class, 'index'])->name('list.view');
        Route::get('/create', [DashboardBlogController::class, 'create'])->name('create.view');
        Route::post('/store', [DashboardBlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DashboardBlogController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [DashboardBlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [DashboardBlogController::class, 'delete'])->name('delete');
    });
    Route::prefix('teams')->name('teams.')->group(function () {
        Route::get('/', [TeamsController::class, 'index'])->name('list.view');
        Route::get('/create', [TeamsController::class, 'create'])->name('create.view');
        Route::post('/store', [TeamsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TeamsController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [TeamsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TeamsController::class, 'delete'])->name('delete');
    });

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile.view');
    Route::post('/profile', [AuthController::class, 'profileAction'])->name('profile.action');
    Route::get('/new-profile', [AuthController::class, 'addAdmin'])->name('new-profile.view');
    Route::post('/new-profile', [AuthController::class, 'store'])->name('new-profile.action');
});








  

