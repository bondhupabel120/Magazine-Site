<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WrittenStory extends Model
{
    protected $fillable = ['name','department','student_id','image','heading','description'];

    public static function saveWrittenStoryInfo($request){
        $stories = new WrittenStory();
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'story-images/';
        $image->move($directory, $imageName);

        $stories->name          = $request->name;
        $stories->department    = $request->department;
        $stories->student_id    = $request->student_id;
        $stories->image         = $directory.$imageName;
        $stories->heading       = $request->heading;
        $stories->description   = $request->description;
        $stories->save();
    }

    public static function saveDeleteStoryInfo($request){
        $story = WrittenStory::find($request->id);
        unlink($story->image);
        $story->delete();
    }
}
