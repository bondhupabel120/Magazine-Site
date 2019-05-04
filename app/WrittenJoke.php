<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WrittenJoke extends Model
{
    protected $fillable = ['name','department','student_id','heading','description'];

    public static function saveWrittenJokeInfo($request){
        $jokes = new WrittenJoke();
        $jokes->name          = $request->name;
        $jokes->department    = $request->department;
        $jokes->student_id    = $request->student_id;
        $jokes->heading       = $request->heading;
        $jokes->description   = $request->description;
        $jokes->save();
    }

    public static function saveDeleteJokeInfo($request){
        $jokes = WrittenJoke::find($request->id);
        $jokes->delete();
    }
}
