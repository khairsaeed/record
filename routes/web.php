<?php

use App\Http\Controllers\ActivityProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\OwnerFactoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\EconomicCategoryController;
use App\Http\Controllers\IndustryActivityController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialStandardController;
use App\Http\Controllers\ProductStandardController;
use App\Http\Controllers\primeryMaterialController;
use App\Models\activityProduct;
use App\Models\economic_category;
use Database\Seeders\MaterialStandardSeeder;
use App\Imports\productStandardImport;
use App\Exports\productStandardExport;
use Illuminate\Support\Facades\DB;


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
//     return view('welcome');
// });
Route::get('dataTable', function () {
  return view('adminlte.datatable');

});
Auth::routes();


Route::get('file-import-export', [ProductStandardController::class, 'fileImportExport']);
Route::post('file-import', [ProductStandardController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [ProductStandardController::class, 'fileExport'])->name('file-export');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
  //  Route::resource('products', ProductController::class);
  Route::get('/',[FactoryController::class,'index']);


Route::get('owners', [OwnerController::class, 'index'])->name('owners');
Route::get('/owner/create',[OwnerController::class,'create'])->name('owner.create');
Route::get('/owner/edit/{owner}',[OwnerController::class,'edit'])->name('owner.edit');
Route::patch('/owner/update/{owner}',[OwnerController::class,'update'])->name('owner.update');
//Route::get('/industry',[OwnerController::class,'create'])->name('owner.create');
Route::post('/owner/store',[OwnerController::class,'store'])->name('owner.store');
Route::delete('owner/delete/{owner}', [OwnerController::class,'destroy'])->name('owner.delete');

Route::get('/factory/create',[FactoryController::class,'create'])->name('factory.create');
Route::post('/factory/store',[FactoryController::class,'store'])->name('factory.store');
Route::get('/factory/edit/{factory}',[FactoryController::class,'edit'])->name('factory.edit');
Route::patch('/factory/update/{factory}',[FactoryController::class,'update'])->name('factory.update');
Route::get('/factory/show/{factory}',[FactoryController::class,'show'])->name('factory.show');
Route::get('/factories',[FactoryController::class,'index'])->name('factories');
Route::delete('factory/delete/{factory}', [FactoryController::class,'destroy'])->name('factory.delete');

Route::get('/factoryowners/create/{factory}',[OwnerFactoryController::class,'create'])->name('factory.owners.create');

// for ajax search
Route::post('/factoryowners/search',[OwnerFactoryController::class,'search'])->name('factoryowners.search');

Route::post('/factoryowners/store/{owner_id}',[OwnerFactoryController::class,'store'])->name('factory.owners.store');

Route::get('/factory_owner/delete/{factory}/{owner}', [OwnerFactoryController::class,'destroy'])->name('factory.owners.delete');


Route::get('/record/create/{factory}',[RecordController::class,'create'])->name('record.create');
Route::post('/record/store',[RecordController::class,'store'])->name('record.store');
Route::get('/record/edit/{factory}/{record}',[RecordController::class,'edit'])->name('record.edit');
Route::patch('/record/update/{record}',[RecordController::class,'update'])->name('record.update');
//Route::get('/record/delete/{record}', [RecordController::class,'destroy'])->name('record.delete');
Route::delete('/record/delete/{record}', [RecordController::class,'destroy'])->name('record.delete');



Route::get('/economicCategories',[EconomicCategoryController::class,'index'])->name('economicCategories');
//Route::get('/activity/create/{economic_category}',[IndustryActivityController::class,'create'])->name('activity.create');
Route::post('/activity/create',[IndustryActivityController::class,'create'])->name('activity.create');
Route::post('/activity/store',[IndustryActivityController::class,'store'])->name('activity.store');
Route::get('/activity/delete/{industry_activity}', [IndustryActivityController::class,'destroy'])->name('activity.delete');
Route::get('/activity/show/{record}', [IndustryActivityController::class,'show'])->name('activity.show');

Route::get('/productStandards',[ProductStandardController::class,'index'])->name('productStandards');

// this route for ajax to get activity code
Route::get('/getGroupss/{unite}', [EconomicCategoryController::class,'getGroupss'])->name('activity.getGroupss');
Route::get('/groups_change/{groups}', [EconomicCategoryController::class,'groups_change'])->name('activity.groups_change');
Route::get('/chapter_change/{chapter}', [EconomicCategoryController::class,'chapter_change'])->name('activity.chapter_change');
Route::get('/branch_change/{branch}', [EconomicCategoryController::class,'branch_change'])->name('activity.branch_change');

// end route ajax to get activity code
Route::get('/activityIndustry/show/{industry_activity}',[MaterialController::class,'show'])->name('material.show');

Route::get('/product/create',[productController::class,'create'])->name('product.create');
Route::post('/product/store',[productController::class,'store'])->name('product.store');
Route::get('/product/edit/{product}',[productController::class,'edit'])->name('product.edit');
Route::patch('/product/update/{product}',[productController::class,'update'])->name('product.update');
Route::delete('/product/delete/{product}',[productController::class,'destroy'])->name('product.delete');
Route::get('/product/show/{product}', [productController::class,'show'])->name('product.show');
Route::get('/product/delete/{activityProduct}', [ActivityProductController::class,'destroy'])->name('product.destroy');

//Route::get('/primeryMaterial/show/{product}',[primeryMaterialController::class,'show'])->name('primeryMaterial.show');

Route::get('/primeryMaterial/create',[primeryMaterialController::class,'create'])->name('primeryMaterial.create');
Route::post('/primeryMaterial/store',[primeryMaterialController::class,'store'])->name('primeryMaterial.store');
Route::get('/primeryMaterial/edit/{primeryMaterial}',[primeryMaterialController::class,'edit'])->name('primeryMaterial.edit');
Route::patch('/primeryMaterial/update/{primeryMaterial}',[primeryMaterialController::class,'update'])->name('primeryMaterial.update');
Route::delete('/primeryMaterial/delete/{primeryMaterial}',[primeryMaterialController::class,'destroy'])->name('primeryMaterial.delete');





//Route::get('/materialStandards',[MaterialStandardController::class,'index'])->name('materialStandards');
Route::get('/materialStd',[MaterialController::class,'index'])->name('materialStd');


// Route::get('/activityProduct/show/{activityProduct}',[MaterialController::class,'show'])->name('material.show');

Route::get('/material/create/{primeryMaterial}',[MaterialController::class,'create'])->name('material.create');
Route::post('/material/store',[MaterialController::class,'store'])->name('material.store');



Route::get('/primeryMaterialStd',[primeryMaterialController::class,'index'])->name('primeryMaterialStd');


/****************** احصائيات **********************/

Route::get('/statistics',[FactoryController::class,'factoryCountByGroup'])->name('statistics');
Route::get('/factories/{groupID}',[FactoryController::class,'factoryByGroupID'])->name('factory.group');





});
