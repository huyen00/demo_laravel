<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sinhvien;



class SinhvienController extends Controller
{
    //
    public function __construct(){
       
        $this->users = new sinhvien();
    }
    public function index(){
        $users = new sinhvien();
        $usersList = $users->getAllSinhVien();
     
          return view('clients/sinhvien/list',compact('usersList'));
    }
    public function add(){
        $title = 'Thêm người dùng';
        return view('clients/sinhvien/addsv', compact('title'));
    }
    public function postAdd(Request $request){
        $request->validate([
            'masv' => 'required|min:1|unique:sinhvien',
            'fullname' => 'required|min:5',
            'lop' => 'required|min:2',
            'ngaysinh' => 'required|date',
            'gioitinh' => 'required|min:2',

            'diachi' => 'required|min:5',


        ],[
            'masv.required' => ' Mã sinh viên bắt buộc phải nhập',
            'masv.min' => ' Mã sinh viên phải từ :min ký tự trở lên',
            'masv.unique' => ' Mã sinh viên đã tồn tại',
            'fullname.required' => ' Họ tên  sinh viên bắt buộc phải nhập',
            'fullname.min' => ' Họ tên  phải từ :min ký tự trở lên',
            'lop.required' => ' Lớp bắt buộc phải nhập',
            'lop.min' => ' Lớp phải từ :min ký tự trở lên',
            'ngaysinh.required' => ' Ngày sinh bắt buộc phải nhập',
            'ngaysinh.min' => ' Ngày sinh phải từ :min ký tự trở lên',
            'gioitinh.required' => ' Giới tính  bắt buộc phải nhập',
            'gioitinh.min' => ' Giới tính phải từ :min ký tự trở lên',
            'diachi.required' => ' Địa chỉ bắt buộc phải nhập',
            'diachi.min' => ' Địa chỉ phải từ :min ký tự trở lên',
        ]);
      $dataInsert= [
        $request->masv,
        $request->fullname,
        $request->lop,
       date('Y-m-d H:i:s'),
        $request->gioitinh,
        $request->diachi,
        
      ];
      $this->users->addsinhvien($dataInsert);
      return redirect()->route('users_sv.list')->with('msg', 'Thêm người dùng thành công');
    }
    public function getEdit($id=0){
       $title ='Cập nhật sinh viên';
       return view('client.sinhvien.editsv', compact('title'));
    }
}
