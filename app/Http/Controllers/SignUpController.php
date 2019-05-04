<?php

namespace App\Http\Controllers;

use App\Category;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function signUp(){
        return view('front.user.sign-up',[
            'categories'       => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories' => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    public function newSignUp(Request $request){
        Visitor::saveVisitorInfo($request);

        return redirect('/');
    }

    public function visitorLogout(Request $request){
        Session::forget('visitorId');
        Session::forget('visitorName');

        return redirect('/');
    }

    public function visitorLogin(){
        return view('front.user.sign-in',[
            'categories'       => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories' => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    public function visitorSignIn(Request $request){
        $visitor = Visitor::where('email', $request->email)->first();

        if ($visitor){
            if (password_verify($request->password, $visitor->password)) {
                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->user_name);
                return redirect('/');
            } else {
                return redirect('/visitor-login')->with('message', 'Invalid Password !!!');
            }
        } else {
            return redirect('/visitor-login')->with('message', 'Invalid Email !!!');
        }
    }

//    For Row Ajax
//    public function emailCheck($email){
//        $visitor = Visitor::where('email', $email)->first();
//        if($visitor){
//            echo 'Email address already exist';
//        } else {
//            echo 'Email address available';
//        }
//    }

    public function emailCheck($email){
        $visitor = Visitor::where('email', $email)->first();
        if($visitor){
            return json_encode('<span class="text-danger">Email address already exist</span>');
        } else {
            return json_encode('Email address available');
        }
    }
}
