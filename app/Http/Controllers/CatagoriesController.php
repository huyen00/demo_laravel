<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoriesController extends Controller
{


     //Hiể thị danh sách chuyên mục (GET)
     public function index(){
      return view('clients/categories/list');
    }
    // lấy ra 1 chuyên mục theo id (GET)
    public function getCategory($id){
        return view('clients/categories/list');
    }
    // sửa 1 chuyên mục (POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục' .$id;
    }
    // show form thêm dữ liệu (GET)
    public function addCategory(){
        return view('clients/categories/add');
    }
    
    //  Thêm dữ liệu vào chuyên mục (phương thức POST)
    public function handleAddCategory(){
       return  redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }
    // Xóa dữ liệu (DELETE)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục' .$id;
    }
}
