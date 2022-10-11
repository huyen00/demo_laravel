<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    //Hiể thị danh sách chuyên mục (GET)
    public function index(){
        return 'Demo Controller';
    }
    // lấy ra 1 chuyên mục theo id (GET)
    public function getCategory($id){

    }
    // sửa 1 chuyên mục (POST)
    public function updateCategory($id){

    }
    // show form thêm dữ liệu (GET)
    public function addCategory(){

    }
    
    //  Thêm dữ liệu vào chuyên mục (phương thức POST)
    public function handleAddCategory(){

    }
    // Xóa dữ liệu (DELETE)
    public function deleteCategory($id){

    }
}
