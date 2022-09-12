<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//User
Route::get('/', [UserController::class,'index']);
Route::get('/home', [UserController::class,'index']);



//Slider Admin
Route::get('/adminSliderImage', [AdminController::class,'adminSliderImage']);
Route::get('/adminSliderImageAdd', [AdminController::class,'adminSliderImageAdd']);
Route::post('/addSliderImage', [AdminController::class,'addSliderImage']);
Route::get('/deleteSlider/{id}', [AdminController::class,'deleteSlider']);
Route::get('/changeSlider/{id}', [AdminController::class,'changeSlider']);
Route::post('/changeImageFrom/{id}', [AdminController::class,'changeImageFrom']);

//Header Admin

Route::get('/addHeaderAdmin', [AdminController::class,'addHeaderAdmin']);
Route::post('/addHeader', [AdminController::class,'addHeader']);
Route::get('/headerView', [AdminController::class,'headerView']);
Route::get('/deleteHeader/{id}', [AdminController::class,'deleteHeader']);
Route::get('/changeHeader/{id}', [AdminController::class,'changeHeader']);
Route::post('/changeHeaderFrom/{id}', [AdminController::class,'changeHeaderFrom']);

//About

Route::get('/addAbout', [AdminController::class,'addAbout']);
Route::post('/addAboutFrom', [AdminController::class,'addAboutFrom']);
Route::get('/viewAboutMe', [AdminController::class,'viewAboutMe']);

Route::get('/deleteAbout/{id}', [AdminController::class,'deleteAbout']);
Route::get('/changeAbout/{id}', [AdminController::class,'changeAbout']);
Route::post('/changeAboutFrom/{id}', [AdminController::class,'changeAboutFrom']);

Route::get('/addSkill', [AdminController::class,'addSkill']);
Route::post('/addSkillFrom', [AdminController::class,'addSkillFrom']);
Route::get('/deleteSkill/{id}', [AdminController::class,'deleteSkill']);
Route::get('/editSkill/{id}', [AdminController::class,'editSkill']);
Route::post('/editSkillFrom/{id}', [AdminController::class,'editSkillFrom']);

//education
Route::get('/educationAdd', [AdminController::class,'educationAdd']);
Route::post('/addEducationFrom', [AdminController::class,'addEducationFrom']);
Route::get('/educationView', [AdminController::class,'educationView']);
Route::get('/deleteEducation/{id}', [AdminController::class,'deleteEducation']);
Route::get('/changeEducation/{id}', [AdminController::class,'changeEducation']);
Route::post('/editEducationFrom/{id}', [AdminController::class,'editEducationFrom']);

//Experience
Route::get('/experienceAdd', [AdminController::class,'experienceAdd']);
Route::post('/addExperienceFrom', [AdminController::class,'addExperienceFrom']);
Route::get('/experienceView', [AdminController::class,'experienceView']);
Route::get('/deleteExperience/{id}', [AdminController::class,'deleteExperience']);
Route::get('/changeExperience/{id}', [AdminController::class,'changeExperience']);
Route::post('/editExperienceFrom/{id}', [AdminController::class,'editExperienceFrom']);

//Services
Route::get('/servicesAdd', [AdminController::class,'servicesAdd']);
Route::post('/addServicesFrom', [AdminController::class,'addServicesFrom']);
Route::get('/ServiceView', [AdminController::class,'ServiceView']);
Route::get('/deleteService/{id}', [AdminController::class,'deleteService']);
Route::get('/changeService/{id}', [AdminController::class,'changeService']);
Route::post('/editServicesFrom/{id}', [AdminController::class,'editServicesFrom']);

//Portfolio
Route::get('/portfolioAdd', [AdminController::class,'portfolioAdd']);
Route::post('/addPortfolio', [AdminController::class,'addPortfolio']);
Route::get('/portfolioView', [AdminController::class,'portfolioView']);
Route::get('/deletePortfolio/{id}', [AdminController::class,'deletePortfolio']);
Route::get('/changePortfolio/{id}', [AdminController::class,'changePortfolio']);
Route::post('/editPortfolio/{id}', [AdminController::class,'editPortfolio']);



//Contact
Route::get('/contactAdd', [AdminController::class,'contactAdd']);
Route::post('/addContactFrom', [AdminController::class,'addContactFrom']);
Route::get('/contactView', [AdminController::class,'contactView']);
Route::get('/deleteContact/{id}', [AdminController::class,'deleteContact']);
Route::get('/changeContact/{id}', [AdminController::class,'changeContact']);
Route::post('/editContactFrom/{id}', [AdminController::class,'editContactFrom']);



//messageUser
Route::post('/messageUser', [UserController::class,'messageUser']);
Route::get('/ReceivedMessageView', [AdminController::class,'ReceivedMessageView']);

//Download Pdf

Route::get('/downloadPDF', [UserController::class,'downloadPDF']);
