<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Hhome_sectionController;
use App\Http\Controllers\facts_sectionController;
use App\Http\Controllers\skills_sectionController;
use App\Http\Controllers\skill_head_sectionController;
use App\Http\Controllers\about_sectionController;
use App\Http\Controllers\social_link_sectionController;
use App\Http\Controllers\service_sectionController;
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

Route::get('/',[PageController::class,'index'])->name('index');
//Backend Dashboard here....
Route::get('/admin/Dashboad',[PageController::class,'dashboard'])->name('admin.Dashboad');
//Backend Home Section here....
Route::get('/admin/home',[Hhome_sectionController::class,'index'])->name('admin.home');
Route::put('/admin/home',[Hhome_sectionController::class,'update'])->name('admin.home.update');
//Backend About Section here....
Route::get('/admin/about',[about_sectionController::class,'index'])->name('admin.about');
Route::put('/admin/about',[about_sectionController::class,'update'])->name('admin.about.update');
//Backend Facts Section here....
Route::get('/admin/facts/create',[facts_sectionController::class,'create'])->name('admin.facts.create');
Route::post('/admin/facts/create',[facts_sectionController::class,'store'])->name('admin.facts.store');
Route::get('/admin/facts/list',[facts_sectionController::class,'list'])->name('admin.facts.list');
Route::get('/admin/facts/edit/{id}',[facts_sectionController::class,'edit'])->name('admin.facts.edit');
Route::post('/admin/facts/update/{id}',[facts_sectionController::class,'update'])->name('admin.facts.update');
Route::delete('/admin/facts/destroy/{id}',[facts_sectionController::class,'destroy'])->name('admin.facts.destroy');
//Backend skills Section here....
Route::get('/admin/skill/create',[skills_sectionController::class,'create'])->name('admin.skill.create');
Route::post('/admin/skill/create',[skills_sectionController::class,'store'])->name('admin.skill.store');
Route::get('/admin/skill/list',[skills_sectionController::class,'list'])->name('admin.skill.list');
Route::get('/admin/skill/edit/{id}',[skills_sectionController::class,'edit'])->name('admin.skill.edit');
Route::post('/admin/skill/update/{id}',[skills_sectionController::class,'update'])->name('admin.skill.update');
Route::delete('/admin/skill/destroy/{id}',[skills_sectionController::class,'destroy'])->name('admin.skill.destroy');
Route::get('/admin/skill/head',[skill_head_sectionController::class,'index'])->name('admin.skill_head.index');
Route::post('/admin/skill/head',[skill_head_sectionController::class,'update'])->name('admin.skill_head.update');

//Backend service Section here....
Route::get('/admin/service/create',[service_sectionController::class,'create'])->name('admin.service.create');
Route::post('/admin/service/create',[service_sectionController::class,'store'])->name('admin.service.store');
Route::get('/admin/service/list',[service_sectionController::class,'list'])->name('admin.service.list');
Route::get('/admin/service/edit/{id}',[service_sectionController::class,'edit'])->name('admin.service.edit');
Route::post('/admin/service/update/{id}',[service_sectionController::class,'update'])->name('admin.service.update');
Route::delete('/admin/service/destroy/{id}',[service_sectionController::class,'destroy'])->name('admin.service.destroy');
Route::get('/admin/service/{id}',[PageController::class,'show'])->name('admin.service.show');//fontend page
//Backend Profile Section here....
Route::get('/admin/profile/social_link/create',[social_link_sectionController::class,'create'])->name('admin.Social_link.create');
Route::post('/admin/profile/social_link/create',[social_link_sectionController::class,'store'])->name('admin.Social_link.store');
Route::get('/admin/profile/social_link/list',[social_link_sectionController::class,'list'])->name('admin.Social_link.list');
Route::get('/admin/profile/social_link/edit/{id}',[social_link_sectionController::class,'edit'])->name('admin.Social_link.edit');
Route::post('/admin/profile/social_link/update/{id}',[social_link_sectionController::class,'update'])->name('admin.Social_link.update');
Route::delete('/admin/profile/social_link/destroy/{id}',[social_link_sectionController::class,'destroy'])->name('admin.Social_link.destroy');


/*Route::get('/admin/service/create',[service_sectionController::class,'create'])->name('admin.service.create');
Route::post('/admin/service/create',[service_sectionController::class,'store'])->name('admin.service.store');
Route::get('/admin/service/list',[service_sectionController::class,'list'])->name('admin.service.list');
Route::get('/admin/service/edit/{id}',[service_sectionController::class,'edit'])->name('admin.service.edit');
Route::post('/admin/service/update/{id}',[service_sectionController::class,'update'])->name('admin.service.update');
Route::delete('/admin/service/destroy/{id}',[service_sectionController::class,'destroy'])->name('admin.service.destroy');
Route::get('/admin/service/{id}',[PageController::class,'show'])->name('admin.service.show');//fontend page*/

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
