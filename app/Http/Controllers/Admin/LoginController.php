<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminModel;
use Session;

class LoginController extends Controller
{
    public function fromview(){
        return view('Admin.login');

    }

    public function login(Request $req){
        $user_id=$req->user_id;
        $password=$req->password;
        $data=AdminModel::where(['user_id'=>$user_id, 'password'=>$password])->first();
        
        if($data){
            $adminData=$data->toarray();
            Session::put('UserName', $adminData['name']);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login.from')->with('success', 'Wrong Credential');
        }
    }
   
    public function userlogout(Request $req){
       Session::forget('UserName');
        return redirect()->route('admin.login.from');
    }

    public function signfromview(){
        return view('Admin.signup');
    }

    public function registerUser(Request $req){
        // insert Data...
        $condition = [];
        $condition['name']=$req->name;
        $condition['email']=$req->email;
        $condition['user_id']=$req->user_id;
        $condition['password']=$req->password;
        // print_r($condition);
        // die;

        $insertData = AdminModel::create($condition);  //use Create function for insert data in database...
        return redirect()->route('admin.login.from')->with('register_success','User Account Created succssfully Login Now... ');
        
        // insert Data end...
        // $UserMod=new UserModel();

        // $UserMod->name=$name;
        // $UserMod->email=$email;
        // $UserMod->user_id=$user_id;
        // $UserMod->password=$password;
        // $UserMod->save();
    }
}
