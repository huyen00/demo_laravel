<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){
        echo 'Khơi động';
        // return 'Khởi động Dashboard';
    }
    public function index(){
        return '<h2>Dashboard Wellcome </h2>';
    }
}
