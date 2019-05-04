<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Mail;

class Visitor extends Model
{
    protected $fillable = ['user_name','email','password','phone'];

    public static function saveVisitorInfo($request){
        $visitor = new Visitor();
        $visitor->user_name        = $request->user_name;
        $visitor->email            = $request->email;
        $visitor->password         = bcrypt($request->password);
        $visitor->phone            = $request->phone;
        $visitor->save();

        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->user_name);

        $data = $visitor->toArray();
        Mail::send('front.mail.congratulation-mail', $data, function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Congratulations');
        });
    }
}
