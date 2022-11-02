<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SinhvienController;

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


Route::get('/as',[HomeController1::class, 'index']);


// // chuyển hướng bằng controller
// Route::get('/',[HomeController1::class, 'index']);

// // lấy tham số tự dộng trên url
// Route::prefix('admin')->group(function(){
//     Route::get('add/{slug?}-{id?}.html',function($slug=null,$id=null){
//         $content= 'Thêm sản phẩm:';
//         $content.='id = '.$id.'<br>';
//         $content.='slug =' .$slug;
//         return $content;

//     })->where(
//         [
//             'slug'=> '.+',
//             'id'=> '[0-9]+',
//         ]
//         );
//         // cách đặt tên
//     Route::get('edit', function(){
//         return 'Sửa sản phẩm';
//     })->name('admin.edit');
//     // middleware: tạo mơi 1 file checkPermission middleware 
//     Route::prefix('trangchu')->middleware('checkpermission')->group(function(){
//         Route::get('tin-tuc', function(){
//             return 'Trang Tin Tức';
//         });
//         Route::get('trang-quan-tri', function(){
//             return ' Trang Quản trị';
//         });
//     });
// });

// client routes
Route::prefix('categories')->group(function(){

    // danh sách chuyên mục
    Route::get('/',[CatagoriesController::class, 'index'])->name('categories.list');

    // lấy chi tiết 1 danh mục ( áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}',[CatagoriesController::class, 'getCategory'])->name('categories.edit');

    // xử lý update chuyên mục
    Route::post('/edit/{id}', [CatagoriesController::class, 'updateCategory']);

    // Hieern thi form add duwx lieeju
    Route::get('/add', [CatagoriesController::class,'addCategory'])->name('categories.add');

    // xử lý thêm chuyên mục
    Route::post('/add', [CatagoriesController::class,'handleAddCategory']);

    // Xóa chuyên mục 
    Route::delete('delete/{id}',  [CatagoriesController::class,'deleteCategory'])->name('categories.delete');



});
// admin route
Route::prefix('admin')->group(function(){
    Route::resource('products', ProductsController::class);
    // products- index 
});

Route::prefix('admin')->name('users_sv.')->group(function(){
    Route::get('/', [SinhvienController::class, 'index'])->name('list');
    Route::get('add', [SinhvienController::class, 'add'])->name('add');
    Route::post('add',[SinhvienController::class,'postAdd']);
    Route::get('/edit/{id}',[SinhvienController::class,'getEdit'])->name('editsv');
    Route::post('/edit/{id}',[SinhvienController::class,'postEdit'])->name('post-edit');
   
});