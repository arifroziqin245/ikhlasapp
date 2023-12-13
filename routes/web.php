<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesController;
use App\Models\Category;
use App\Models\History;
use App\Models\Inventory;
use App\Models\Order;
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

Route::get('/',[InventoryController::class, 'index'])->middleware('auth');

Route::get('/change', [InventoryController::class, 'change']);

// Route::get('/report', [InventoryController::class, 'report']);

Route::get('/order', [InventoryController::class, 'order']);

Route::get('/admin/detail_order/{id}', [InventoryController::class, 'detail_order']);
Route::post('/admin/aksi_order/{id}', [InventoryController::class, 'seleksi_order']);

Route::get('/dashboard', function () {
    return view('index');
});

route::get('/inventory/category/tambah', function(){
    return view('admin.categoryCreate',
    [
        'category' => Category::all()
    ]);
});
//route resource
Route::resource('/inventory',InventoryController::class);
Route::get('/tambah', [InventoryController::class, 'tambah']);
Route::delete('/hapusorder/{id}', [InventoryController::class, 'hapusOrder']);

Route::resource('/category',CategoryController::class);

//route Sales
Route::resource('/sales',SalesController::class)->middleware('auth');
Route::get('/sd', [SalesController::class, 'dashboard']);
Route::get('/sl', [SalesController::class, 'list']);
Route::get('/not', [SalesController::class, 'nota']);
Route::get('/el', [SalesController::class, 'edit_order']);
Route::post('/sl-store', [SalesController::class, 'store_tambah']);
route::get('getDetail/{id}', [SalesController::class, 'getDetail'])->name('getDetail');
route::delete('/sales/{id}', [SalesController::class, 'destroy']);
// route Boss
Route::resource('/boss', BossController::class)->middleware('auth');
Route::get('/invenBoss', [InventoryController::class, 'invenBoss']);
Route::get('/orderBoss', [InventoryController::class, 'orderBoss']);
route::get('/get_do/{id}', [BossController::class, 'getDetailORder']);
route::post('/boss/laporan', [BossController::class, 'laporan']);

// route create satuan
Route::post('/satuan', [CategoryController::class, 'satuan']);
Route::get('/ab/{id}', [SalesController::class, 'ambilbarang']);
Route::get('/salesnew/{id}', [SalesController::class, 'form_sales']);
Route::put('/ab_data/{id}', [SalesController::class, 'ambildatabarang']);

// routes untuk tambah cust
Route::post('/sales/tcust', [SalesController::class, 'store_cust']);
Route::get('/setceklist', [InventoryController::class, 'setOrder']);

//route print
Route::get('/admin/print/{id}', [InventoryController::class, 'print']);
Route::get('/sales/print/{id}', [SalesController::class, 'print']);

// tambah gambar
Route::post('admin/tambah_gambar/{id}', [InventoryController::class, 'tambahGambar']);
Route::post('/get_inventory', [InventoryController::class, 'json']);

//login
route::get('/login',  [AuthController::class, 'index'])->name('login');
route::post('/authentication',  [AuthController::class, 'authenticate']);
route::post('/logout',  [AuthController::class, 'logout']);
