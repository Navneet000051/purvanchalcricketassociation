<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\AmendmentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DirectorController;

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


Route::get('/admin',[LoginController::class,'index']);

Route::post('/admin_login',[LoginController::class,'adminLogin']);


Route::group(['middleware' => ['admin_auth']], function () {

    Route::get('/manage_profile/{id}',[ProfileController::class,'index']);
    Route::post('/update_password',[ProfileController::class, 'updatePassword']);
    Route::post('/update_profile',[ProfileController::class, 'updateProfile']);
    // Route::post('/change_password',[ProfileController::class, 'changePassword']);

Route::get('/logout_admin',[LoginController::class,'logoutAdmin']);
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('amendment',[AmendmentController::class,'index']);
Route::post('addAmendment',[AmendmentController::class,'addAmendment']);
Route::get('showAmendment',[AmendmentController::class,'showAmendment']);
Route::get('editAmendment{id}',[AmendmentController::class,'editAmendment']);
Route::post('updateAmendment',[AmendmentController::class,'updateAmendment']);
Route::get('deleteAmendment{id}',[AmendmentController::class,'deleteAmendment']);
Route::get('statusAmendment{id}',[AmendmentController::class,'statusAmendment']);

Route::get('photo',[PhotoController::class,'index']);
Route::post('addPhotos',[PhotoController::class,'addPhotos']);
Route::get('showPhotos',[PhotoController::class,'showPhotos']);
Route::get('listImag{id}',[PhotoController::class,'listImage']);
Route::get('editPhotos{id}',[PhotoController::class,'editPhotos']);
Route::post('updatePhotos',[PhotoController::class,'updatePhotos']); 
Route::get('deletePhotos{id}',[PhotoController::class,'deletePhotos']);  
Route::get('statusPhotos{id}',[PhotoController::class,'statusPhotos']);  
Route::get('delPhotos{id}',[PhotoController::class,'delPhotos']);
Route::post('addImage',[PhotoController::class,'addImage']);


Route::get('video',[VideoController::class,'index']);
Route::post('addVideo',[VideoController::class,'addVideo']);
Route::get('showVideo',[VideoController::class,'showVideo']);
Route::get('deleteVideo{id}',[VideoController::class,'deleteVideo']);
Route::get('editVideo{id}',[VideoController::class,'editVideo']);
Route::post('updateVideo',[VideoController::class,'updateVideo']);
Route::get('statusVideo{id}',[VideoController::class,'statusVideo']);


Route::get('/news',[NewsController::class,'index']);
Route::post('/addNews',[NewsController::class,'addNews']);
Route::get('/showNews',[NewsController::class,'showNews']);
Route::get('/editNews{id}',[NewsController::class,'editNews']);
Route::post('/updateNews',[NewsController::class,'updateNews']);
Route::get('/statusNews{id}',[NewsController::class,'statusNews']);
Route::get('/deleteNews{id}',[NewsController::class,'deleteNews']);

Route::get('/email',[EmailController::class,'index']);
Route::get('/showEmail',[EmailController::class,'showEmail']);
Route::get('/unit',[UnitController::class,'index']);
Route::post('/add_unit',[UnitController::class,'add_unit']);
Route::get('/show_unit',[UnitController::class,'show_unit']);
Route::get('/edit_unit{id}',[UnitController::class,'edit_unit']);
Route::get('/deleteUnit{id}',[UnitController::class,'deleteUnit']);
Route::post('/updateUnit',[UnitController::class,'updateUnit']);
Route::get('/Unitstatus{id}',[UnitController::class,'Unitstatus']);
Route::get('/directors',[DirectorController::class,'index']);
Route::post('/addDirectors',[DirectorController::class,'addDirectors']);
Route::get('/showDirectors',[DirectorController::class,'showDirectors']);
Route::get('/editDirectors{id}',[DirectorController::class,'editDirectors']);
Route::post('/updateDirectors',[DirectorController::class,'updateDirectors']);
Route::get('/directorStatus{id}',[DirectorController::class,'directorStatus']);
Route::get('/deleteDirectors{id}',[DirectorController::class,'deleteDirectors']);

});

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/aims_object',[HomeController::class,'aims_object']);
Route::get('/articles',[HomeController::class,'articles']);
Route::get('/blogs',[HomeController::class,'blogs']);
Route::get('/blog_details',[HomeController::class,'blog_details']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/guidelines',[HomeController::class,'guidelines']);
Route::get('/matches',[HomeController::class,'matches']);
Route::get('/news_cutting',[HomeController::class,'news_cutting']);
Route::get('/news_videos',[HomeController::class,'news_videos']);
Route::get('/pca_constitution',[HomeController::class,'pca_constitution']);
Route::get('/pca_mission',[HomeController::class,'pca_mission']);
Route::get('/pca_officials',[HomeController::class,'pca_officials']);
Route::get('/photos',[HomeController::class,'photos']);
Route::get('/players_details',[HomeController::class,'players_details']);
Route::get('/players',[HomeController::class,'players']);
Route::get('/rules_game',[HomeController::class,'rules_game']);
Route::get('/mens_team',[HomeController::class,'mens_team']);
Route::get('/womens_team',[HomeController::class,'womens_team']);
Route::get('/videos',[HomeController::class,'videos']);
Route::post('/addMail',[HomeController::class,'addMail']);
Route::get('/districts',[HomeController::class,'districts']);





















