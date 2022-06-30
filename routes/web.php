<?php

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

Route::get('/',[App\Http\Controllers\HomeController::class, 'view_activity'])->name('welcome');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'view_activity'])->name('welcome');



Route::get('/governance',[App\Http\Controllers\GovernanceController::class, 'show_tables'])->name('governanc');
Route::get('/infrastructures',[App\Http\Controllers\InfrastructureController::class, 'show_data'])->name('infrastructures');
Route::get('/appandservices',[App\Http\Controllers\DigitalhealthplatformController::class, 'show_data'])->name('appandservices');
Route::get('/standard',[App\Http\Controllers\StandardController::class, 'show_data'])->name('standard');
Route::get('/aiinhealth',[App\Http\Controllers\AiinhealthController::class, 'show_data'])->name('aiinhealth');
Route::get('/implementations',[App\Http\Controllers\ImplementationController::class, 'show_data'])->name('implementations');
Route::get('/changeadoption',[App\Http\Controllers\ChangeadoptionController::class, 'show_data'])->name('changeadoption');
Route::get('/digitalhealthmilestone',[App\Http\Controllers\DigitalhealthmilestoneController::class, 'show_data'])->name('digitalhealthmilestone');
Route::get('/digitalmatrix',[App\Http\Controllers\DigitalmatrixController::class, 'show_data'])->name('digitalmatrx');
Route::get('activities/{activity_name}', [App\Http\Controllers\HomeController::class, 'view_details'])->name('activity_details');
 Route::get('digitalhealth/{menu_sub_category}', [App\Http\Controllers\MenuSubCategoryController::class, 'show_description'])->name('subcategory.show');

Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'indexe'])->name('home')->middleware('auth');

Route::middleware(['web','auth',])->group(function () {


//MEnu Category
Route::get('menucategory', [App\Http\Controllers\MenuCategoryController::class, 'index'])->name('menucategory.index');
Route::get('menucategory/create', [App\Http\Controllers\MenuCategoryController::class, 'create'])->name('menucategory.create');
Route::post('menucategory', [App\Http\Controllers\MenuCategoryController::class, 'store'])->name('menucategory');
Route::get('menucategory/{id}', [App\Http\Controllers\MenuCategoryController::class, 'show'])->name('menucategory.show');
Route::get('menucategory/{id}/edit', [App\Http\Controllers\MenuCategoryController::class, 'edit'])->name('menucategory.edit');
Route::put('menucategory/{id}/update', [App\Http\Controllers\MenuCategoryController::class, 'update'])->name('menucategory.update');
Route::delete('menucategory/{id}/delete', [App\Http\Controllers\MenuCategoryController::class, 'delete'])->name('menucategory.delete');


//MEnu sub Category
Route::get('menusubcategory', [App\Http\Controllers\MenuSubCategoryController::class, 'index'])->name('menusubcategory.index');
Route::get('menusubcategory/create', [App\Http\Controllers\MenuSubCategoryController::class, 'create'])->name('menusubcategory.create');
Route::post('menusubcategory', [App\Http\Controllers\MenuSubCategoryController::class, 'store'])->name('menusubcategory');
// Route::get('menusubcategry/{id}', [App\Http\Controllers\MenuSubCategoryController::class, 'show'])->name('menusubcategry.show');
Route::get('menusubcategory/{id}/edit', [App\Http\Controllers\MenuSubCategoryController::class, 'edit'])->name('menusubcategory.edit');
Route::put('menusubcategory/{id}/update', [App\Http\Controllers\MenuSubCategoryController::class, 'update'])->name('menusubcategory.update');
Route::delete('menusubcategory/{id}/delete', [App\Http\Controllers\MenuSubCategoryController::class, 'delete'])->name('menusubcategory.delete');

//Activity
     Route::get('activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity.index');
     Route::get('activity/create', [App\Http\Controllers\ActivityController::class, 'create'])->name('activity.create');
     Route::post('activity', [App\Http\Controllers\ActivityController::class, 'store'])->name('activity');
     Route::get('activity/{id}', [App\Http\Controllers\ActivityController::class, 'show'])->name('activity.show');
     Route::get('activity/{id}/edit', [App\Http\Controllers\ActivityController::class, 'edit'])->name('activity.edit');
     Route::put('activity/{id}/update', [App\Http\Controllers\ActivityController::class, 'update'])->name('activity.update');
     Route::delete('activity/{id}/delete', [App\Http\Controllers\ActivityController::class, 'delete'])->name('activity.delete');




//digitalhealth
Route::get('digitalhealthplatform', [App\Http\Controllers\DigitalhealthplatformController::class, 'index'])->name('digitalhealthplatform.index');
Route::get('digitalhealthplatform/create', [App\Http\Controllers\DigitalhealthplatformController::class, 'create'])->name('digitalhealthplatform.create');
Route::post('digitalhealthplatform', [App\Http\Controllers\DigitalhealthplatformController::class, 'store'])->name('digitalhealthplatform');
Route::get('digitalhealthplatform/{id}', [App\Http\Controllers\DigitalhealthplatformController::class, 'show'])->name('digitalhealthplatform.show');
Route::get('digitalhealthplatform/{id}/edit', [App\Http\Controllers\DigitalhealthplatformController::class, 'edit'])->name('digitalhealthplatform.edit');
Route::put('digitalhealthplatform/{id}/update', [App\Http\Controllers\DigitalhealthplatformController::class, 'update'])->name('digitalhealthplatform.update');
Route::delete('digitalhealthplatform/{id}/delete', [App\Http\Controllers\DigitalhealthplatformController::class, 'delete'])->name('digitalhealthplatform.delete');


//standard
Route::get('standardd', [App\Http\Controllers\StandardController::class, 'index'])->name('standardd.index');
Route::get('standardd/create', [App\Http\Controllers\StandardController::class, 'create'])->name('standardd.create');
Route::post('standardd', [App\Http\Controllers\StandardController::class, 'store'])->name('standardd');
Route::get('standardd/{id}', [App\Http\Controllers\StandardController::class, 'show'])->name('standardd.show');
Route::get('standardd/{id}/edit', [App\Http\Controllers\StandardController::class, 'edit'])->name('standardd.edit');
Route::put('standardd/{id}/update', [App\Http\Controllers\StandardController::class, 'update'])->name('standardd.update');
Route::delete('standardd/{id}/delete', [App\Http\Controllers\StandardController::class, 'delete'])->name('standardd.delete');

//changeadoption
Route::get('change', [App\Http\Controllers\ChangeadoptionController::class, 'index'])->name('change.index');
Route::get('change/create', [App\Http\Controllers\ChangeadoptionController::class, 'create'])->name('change.create');
Route::post('change', [App\Http\Controllers\ChangeadoptionController::class, 'store'])->name('change');
Route::get('change/{id}', [App\Http\Controllers\ChangeadoptionController::class, 'show'])->name('change.show');
Route::get('change/{id}/edit', [App\Http\Controllers\ChangeadoptionController::class, 'edit'])->name('change.edit');
Route::put('change/{id}/update', [App\Http\Controllers\ChangeadoptionController::class, 'update'])->name('change.update');
Route::delete('change/{id}/delete', [App\Http\Controllers\ChangeadoptionController::class, 'delete'])->name('change.delete');

//aihealth
Route::get('aihealth', [App\Http\Controllers\AiinhealthController::class, 'index'])->name('aihealth.index');
Route::get('aihealth/create', [App\Http\Controllers\AiinhealthController::class, 'create'])->name('aihealth.create');
Route::post('aihealth', [App\Http\Controllers\AiinhealthController::class, 'store'])->name('aihealth');
Route::get('aihealth/{id}', [App\Http\Controllers\AiinhealthController::class, 'show'])->name('aihealth.show');
Route::get('aihealth/{id}/edit', [App\Http\Controllers\AiinhealthController::class, 'edit'])->name('aihealth.edit');
Route::put('aihealth/{id}/update', [App\Http\Controllers\AiinhealthController::class, 'update'])->name('aihealth.update');
Route::delete('aihealth/{id}/delete', [App\Http\Controllers\AiinhealthController::class, 'delete'])->name('aihealth.delete');



//implementation
Route::get('implementation', [App\Http\Controllers\ImplementationController::class, 'index'])->name('implementation.index');
Route::get('implementation/create', [App\Http\Controllers\ImplementationController::class, 'create'])->name('implementation.create');
Route::post('implementation', [App\Http\Controllers\ImplementationController::class, 'store'])->name('implementation');
Route::get('implementation/{id}', [App\Http\Controllers\ImplementationController::class, 'show'])->name('implementation.show');
Route::get('implementation/{id}/edit', [App\Http\Controllers\ImplementationController::class, 'edit'])->name('implementation.edit');
Route::put('implementation/{id}/update', [App\Http\Controllers\ImplementationController::class, 'update'])->name('implementation.update');
Route::delete('implementation/{id}/delete', [App\Http\Controllers\ImplementationController::class, 'delete'])->name('implementation.delete');


//infrastructure
Route::get('infrastructure', [App\Http\Controllers\InfrastructureController::class, 'index'])->name('infrastructure.index');
Route::get('infrastructure/create', [App\Http\Controllers\InfrastructureController::class, 'create'])->name('infrastructure.create');
Route::post('infrastructure', [App\Http\Controllers\InfrastructureController::class, 'store'])->name('infrastructure');
Route::get('infrastructure/{id}', [App\Http\Controllers\InfrastructureController::class, 'show'])->name('infrastructure.show');
Route::get('infrastructure/{id}/edit', [App\Http\Controllers\InfrastructureController::class, 'edit'])->name('infrastructure.edit');
Route::put('infrastructure/{id}/update', [App\Http\Controllers\InfrastructureController::class, 'update'])->name('infrastructure.update');
Route::delete('infrastructure/{id}/delete', [App\Http\Controllers\InfrastructureController::class, 'delete'])->name('infrastructure.delete');

//governance
Route::get('governanc', [App\Http\Controllers\GovernanceController::class, 'index'])->name('governance.index');
Route::get('governance/create', [App\Http\Controllers\GovernanceController::class, 'create'])->name('governance.create');
Route::post('governanc', [App\Http\Controllers\GovernanceController::class, 'store'])->name('governance');
Route::get('governance/{id}', [App\Http\Controllers\GovernanceController::class, 'show'])->name('governance.show');
Route::get('governance/{id}/edit', [App\Http\Controllers\GovernanceController::class, 'edit'])->name('governance.edit');
Route::put('governance/{id}/update', [App\Http\Controllers\GovernanceController::class, 'update'])->name('governance.update');
Route::delete('governance/{id}/delete', [App\Http\Controllers\GovernanceController::class, 'delete'])->name('governance.delete');

//digitalhealthmilestone
Route::get('digitalhealthmilstone', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'index'])->name('digitalhealthmilestone.index');
Route::get('digitalhealthmilestone/create', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'create'])->name('digitalhealthmilestone.create');
Route::post('digitalhealthmilstone', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'store'])->name('digitalhealthmilstone');
Route::get('digitalhealthmilestone/{id}', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'show'])->name('digitalhealthmilestone.show');
Route::get('digitalhealthmilestone/{id}/edit', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'edit'])->name('digitalhealthmilestone.edit');
Route::put('digitalhealthmilestone/{id}/update', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'update'])->name('digitalhealthmilestone.update');
Route::delete('digitalhealthmilestone/{id}/delete', [App\Http\Controllers\DigitalhealthmilestoneController::class, 'delete'])->name('digitalhealthmilestone.delete');



//home
Route::get('homecontent', [App\Http\Controllers\HomeController::class, 'index'])->name('homecontent.index');
Route::get('homecontent/create', [App\Http\Controllers\HomeController::class, 'create'])->name('homecontent.create');
Route::post('homecontent', [App\Http\Controllers\HomeController::class, 'store'])->name('homecontent');
Route::get('homecontent/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('homecontent.show');
Route::get('homecontent/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('homecontent.edit');
Route::put('homecontent/{id}/update', [App\Http\Controllers\HomeController::class, 'update'])->name('homecontent.update');
Route::delete('homecontent/{id}/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('homecontent.delete');

//digitalmatrix
Route::get('digitalmatrx', [App\Http\Controllers\DigitalmatrixController::class, 'index'])->name('digitalmatrix.index');
Route::get('digitalmatrix/create', [App\Http\Controllers\DigitalmatrixController::class, 'create'])->name('digitalmatrix.create');
Route::post('digitalmatrx', [App\Http\Controllers\DigitalmatrixController::class, 'store'])->name('digitalmatrix');
Route::get('digitalmatrix/{id}', [App\Http\Controllers\DigitalmatrixController::class, 'show'])->name('digitalmatrix.show');
Route::get('digitalmatrix/{id}/edit', [App\Http\Controllers\DigitalmatrixController::class, 'edit'])->name('digitalmatrix.edit');
Route::put('digitalmatrix/{id}/update', [App\Http\Controllers\DigitalmatrixController::class, 'update'])->name('digitalmatrix.update');
Route::delete('digitalmatrix/{id}/delete', [App\Http\Controllers\DigitalmatrixController::class, 'delete'])->name('digitalmatrix.delete');
//User
      Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
      Route::get('user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');



});
