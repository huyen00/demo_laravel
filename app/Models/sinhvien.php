<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sinhvien extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllSinhVien(){
        // return '<h2>Dashboard Wellcome </h2>';
        $users = DB::select('SELECT * FROM sinhvien ORDER BY masv  ASC');
        // dd($users);
        return $users;
    }
    public function addsinhvien($data){
        DB::insert('INSERT INTO sinhvien (masv,hoten,hoclop,ngaysinh,gioitinh,diachi) values(?,?,?,?,?,?)', $data);
    }
}
