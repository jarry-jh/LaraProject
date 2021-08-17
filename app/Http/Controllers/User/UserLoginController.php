<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\UserModel;
use Session;

class UserLoginController extends Controller
{
    public function signupfrm(){
        return view('User.registration');
    }

    public function insertsignupdata(Request $req){
        $userData=[];
        $userData['name']=$req->name;
        $userData['email']=$req->email;
        $userData['user_id']=$req->user_id;
        $userData['password']=$req->password;

        $insertData=UserModel::create($userData);
        return redirect()->route('user.loin.from')->with('RegisterSuccess','User Registration Successfully Done Login Now...');
    }

    public function loginfrom(){
        return view('User.login');
    }

    public function logincheck(Request $req){
        $user_id=$req->user_id;
        $password=$req->password;
        $res=UserModel::where(['user_id'=>$user_id, 'password'=>$password])->first();
        if($res){
            $adminData=$res->toArray();
            Session::put('UserName',$adminData['name']);
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->route('user.loin.from')->with('FaieldMassege','Wrong Credential...');
        }
    }

    public function logout(){
        Session::forget('UserName');
        return redirect()->route('user.loin.from');
    }
}
