<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalskillController;
use App\Http\Controllers\SkilllanguageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AboutController;

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

// Route::get('/', function () {
//     return view('fontend.home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin-view', [App\Http\Controllers\AdminController::class, 'adminView'])->name('home');

// Font View
// Route::get('/adminDasboard', [App\Http\Controllers\HomeController::class, 'index'])->name('adminDasboard');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::post('/contact-store', [HomeController::class, 'contactStore'])->name('contact-store');

// Contact
Route::get('/contacts', [ContactController::class, 'index'])->name('backend.contact.index');
// Route::post('/contact-store', [ContactController::class, 'contactStore'])->name('contact-store');
Route::post('/contact{destroy}', [ContactController::class, 'contactDestroy'])->name('contacts.destroy');

// Admin Route //
Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');

// Project 
Route::get('/projects', [ProjectController::class, 'index'])->name('backend.projects.index');
Route::get('/create_project', [ProjectController::class, 'createProject'])->name('backend.projects.create');
Route::post('/project-store', [ProjectController::class, 'projectStore'])->name('project-store');
Route::get('/project/edit/{id}', [ProjectController::class, 'projectEdit'])->name('backend.projects.edit');
Route::put('/project/update/{id}', [ProjectController::class, 'projectUpdate'])->name('projects-update');
Route::delete('/project/{destroy}', [ProjectController::class, 'destroy'])->name('projects.destroy');


// Experience
Route::get('/resumes', [ExperienceController::class, 'index'])->name('backend.resume.index');
Route::get('/create_experience', [ExperienceController::class, 'createExperience'])->name('backend.resume.experience.create');
Route::post('/experience-store', [ExperienceController::class, 'experienceStore'])->name('experience-store');
Route::get('/experience/edit/{id}', [ExperienceController::class, 'experienceEdit'])->name('backend.resume.experience.edit');
Route::put('/experience/update/{id}', [ExperienceController::class, 'experienceUpdate'])->name('experience-update');
Route::delete('/experience/{destroy}', [ExperienceController::class, 'experienceDestroy'])->name('experience.destroy');


// Education
Route::get('/create_education', [EducationController::class, 'createEducation'])->name('backend.resume.education.create');
Route::post('/education-store', [EducationController::class, 'educationStore'])->name('education-store');
Route::get('/education/edit/{id}', [EducationController::class, 'educationEdit'])->name('backend.resume.education.edit');
Route::post('/education/update/{id}', [EducationController::class, 'educationUpdate'])->name('education-update');
Route::delete('/education/{destroy}', [EducationController::class, 'educationDestroy'])->name('education.destroy');


// Professional Skills
Route::get('/create_ProfessionalSkills', [ProfessionalskillController::class, 'createSkill'])->name('backend.resume.professionalSkills.create');
Route::post('/professionalSkill-store', [ProfessionalskillController::class, 'skillStore'])->name('professionalSkill-store');
Route::delete('/professionalSkill/{destroy}', [ProfessionalskillController::class, 'SkillDestroy'])->name('professionalSkill.destroy');


// Skills Language
Route::get('/create_skillsLanguage', [SkilllanguageController::class, 'createSkill_language'])->name('backend.resume.skillLanguage.create');
Route::post('/skillLanguage-store', [SkilllanguageController::class, 'skill_languageStore'])->name('skillLanguage-store');
Route::delete('/skillLanguage/{destroy}', [SkilllanguageController::class, 'skill_languageDestroy'])->name('skillLanguage.destroy');



// Profiles 
Route::get('/profiles', [ProfileController::class, 'index'])->name('backend.profile.index');
Route::get('/create-profile', [ProfileController::class, 'createProfile'])->name('backend.profile.create');
Route::post('/profile-store', [ProfileController::class, 'profileStore'])->name('profile-store');
Route::get('/profile/edit/{id}', [ProfileController::class, 'profileEdit'])->name('backend.profile.edit');
Route::post('/profile/update/{id}', [ProfileController::class, 'profileUpdate'])->name('profile-update');

// About 
Route::get('/abouts', [AboutController::class, 'index'])->name('backend.about.index');
Route::get('/create-about', [AboutController::class, 'createAbout'])->name('backend.about.create');
Route::post('/about-store', [AboutController::class, 'aboutStore'])->name('about-store');
Route::get('/about/edit/{id}', [AboutController::class, 'aboutEdit'])->name('backend.about.edit');
Route::post('/about/update/{id}', [AboutController::class, 'aboutUpdate'])->name('about-update');

// logo 
Route::get('/logo', [LogoController::class, 'index'])->name('backend.logo.index');
Route::get('/create_logo', [LogoController::class, 'createLogo'])->name('backend.logo.create');
Route::post('/logo-store', [LogoController::class, 'logoStore'])->name('logo-store');
Route::delete('/logo/edit/{id}', [LogoController::class, 'logoEdit'])->name('backend.logo.edit');
Route::delete('/logo/update/{id}', [LogoController::class, 'logoUpdate'])->name('logo-update');

