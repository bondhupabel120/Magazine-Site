<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','subject','message'];

    public static function saveContactInfo($request){
        $contact = new Contact();
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->subject   = $request->subject;
        $contact->message   = $request->message;
        $contact->save();
    }

    public static function deleteContactInfo($request){
        $contact = Contact::find($request->id);
        $contact->delete();
    }
}
