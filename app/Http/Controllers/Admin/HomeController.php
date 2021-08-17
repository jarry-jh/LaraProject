<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $fetch_record_of_reg_table = RegisterModel::get()->take(5);
        // $email = $fetch_record_of_reg_table->email;
        // return view('Admin.index',compact('email'));
        return view('Admin.index');
    }

    
}
