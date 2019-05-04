<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WrittenPoem extends Model
{
    protected $fillable = ['name','department','student_id','heading','description'];

    public static function saveWrittenPoemInfo($request){
        $poem = new WrittenPoem();
        $poem->name          = $request->name;
        $poem->department    = $request->department;
        $poem->student_id    = $request->student_id;
        $poem->heading       = $request->heading;
        $poem->description   = $request->description;
        $poem->save();
    }

    public static function saveDeletePoemInfo($request){
        $poem = WrittenPoem::find($request->id);
        $poem->delete();
    }
}
