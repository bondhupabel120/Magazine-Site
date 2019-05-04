<?php

namespace App\Http\Controllers;

use App\User;
use App\Visitor;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerAdmin(){
        return view('admin.login.register',[
            'registers' => User::all()
        ]);
    }

    public function deleteRegister(Request $request){
        $register = User::find($request->id);
        $register->delete();

        return redirect('/register-admin')->with('message','Delete Successfully');
    }

    public function registerUser(){
        return view('admin.user.register-user',[
            'users' => Visitor::all()
        ]);
    }

    public function deleteUser(Request $request){
        $user = Visitor::find($request->id);
        $user->delete();

        return redirect('/register-user')->with('message','Delete Successfully');
    }
}
