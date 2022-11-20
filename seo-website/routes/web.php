<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyInfos;
use App\Http\Controllers\SocailLinksController;


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
//     return view('index');
// });


Route::get('/' , [CompanyInfos::class, 'home'])->name('home');
Route::get('/dashboard' , [CompanyInfos::class, 'index'])->name('index');
Route::post('/edit' , [CompanyInfos::class, 'update'])->name('update');

// socialMediaLink
Route::get('/social-media', [CompanyInfos::class, 'socailLink'])->name('socailLink');
Route::post('/social-media-edit' , [CompanyInfos::class, 'updateSocailLinks'])->name('updateSocailLinks');


Route::get('/home',  [CompanyInfos::class, 'homeDetails'])->name('homeDetails');
Route::post('/edit-home-details' , [CompanyInfos::class, 'updatehomeDetails'])->name('updatehomeDetails');

Route::get('/button', [CompanyInfos::class, 'homeButton'])->name('homeButton');
Route::post('/edit-button' , [CompanyInfos::class, 'updateButton'])->name('updateButton');


Route::get('/service-description', [CompanyInfos::class, 'serviceDetails'])->name('serviceDetails');
Route::post('/edit-description' , [CompanyInfos::class, 'updateServiceDetails'])->name('updateServiceDetails');

Route::get('/service' , [CompanyInfos::class, 'service'])->name('service');
Route::get('/addEditService' , [CompanyInfos::class, 'Addservice'])->name('Addservice');
Route::post('/serviceAddEdit' , [CompanyInfos::class, 'serviceAddEdit'])->name('serviceAddEdit');
Route::get('/EditService/{id}' , [CompanyInfos::class, 'Editservice'])->name('Editservice');
Route::get('/DeleteService/{id}' , [CompanyInfos::class, 'DeleteService'])->name('DeleteService');


Route::get('/project-description', [CompanyInfos::class, 'ViewProject'])->name('ViewProject');
Route::post('/edit-project-description', [CompanyInfos::class, 'AddEditProject'])->name('AddEditProject');


Route::get('/infos', [CompanyInfos::class, 'viewInfo'])->name('viewInfo');
Route::post('/editInfos' , [CompanyInfos::class, 'updateInfos'])->name('updateInfos');



Route::get('/infos-bar', [CompanyInfos::class, 'viewInfoBar'])->name('viewInfoBar');


Route::get('/add-infos-bar', [CompanyInfos::class, 'AddInfoBar'])->name('AddInfoBar');
Route::post('/add-indos-bar', [CompanyInfos::class, 'AddIndosBar'])->name('AddIndosBar');
Route::get('/DeleteIndosBar/{id}' , [CompanyInfos::class, 'DeleteIndosBar'])->name('DeleteIndosBar');

Route::get('/view-contact', [CompanyInfos::class,'viewContact'])->name('viewContact');
Route::get('/DeleteContact/{id}' , [CompanyInfos::class, 'DeleteContact'])->name('DeleteContact');

Route::get('/projects', [CompanyInfos::class,'ViewProjects'])->name('ViewProjects');
Route::get('/add-projects', [CompanyInfos::class,'AddProjects'])->name('AddProjects');
Route::post('/save-projects', [CompanyInfos::class,'AddEditProjects'])->name('AddEditProjects');
Route::get('/DeleteProject/{id}' , [CompanyInfos::class, 'DeleteProject'])->name('DeleteProject');
Route::post('/SaveContact', [CompanyInfos::class,'SaveContact'])->name('SaveContact');
