<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['category_id','news_title','news_short_description','news_long_description','news_image','news_audio','publication_status'];

    public static function saveNewsInfo($request){
        $news = new News();
        $image = $request->file('news_image');
        $imageName = $image->getClientOriginalName();
        $directory = 'news-images/';
        $image->move($directory, $imageName);

        $news->news_image               = $directory.$imageName;

        $audio = $request->file('news_audio');
        $audioName = $audio->getClientOriginalName();
        $directory = 'news-audio/';
        $audio->move($directory, $audioName);

        $news->news_audio               = $directory.$audioName;

        $news->category_id              = $request->category_id;
        $news->news_title               = $request->news_title;
        $news->news_short_description   = $request->news_short_description;
        $news->news_long_description    = $request->news_long_description;
        $news->publication_status       = $request->publication_status;
        $news->save();
    }

    public static function saveNewsUpadateInfo($request){
        $NewsImage = $request->file('news_image');
        $NewsAudio = $request->file('news_audio');
        if ($NewsImage){
            $news = News::find($request->id);
            unlink($news->news_image);

            $imageName = $NewsImage->getClientOriginalName();
            $directory = 'news-images/';
            $NewsImage->move($directory, $imageName);
            $news->news_image               = $directory.$imageName;

            $news->category_id              = $request->category_id;
            $news->news_title               = $request->news_title;
            $news->news_short_description   = $request->news_short_description;
            $news->news_long_description    = $request->news_long_description;
            $news->publication_status       = $request->publication_status;
            $news->save();
        }
        else if($NewsAudio){
            $news = News::find($request->id);
            unlink($news->news_audio);

            $audioName = $NewsAudio->getClientOriginalName();
            $directory = 'news-audio/';
            $NewsAudio->move($directory, $audioName);
            $news->news_audio               = $directory.$audioName;

            $news->category_id              = $request->category_id;
            $news->news_title               = $request->news_title;
            $news->news_short_description   = $request->news_short_description;
            $news->news_long_description    = $request->news_long_description;
            $news->publication_status       = $request->publication_status;
            $news->save();
        }
        else
        {
            $news = News::find($request->id);

            $news->category_id              = $request->category_id;
            $news->news_title               = $request->news_title;
            $news->news_short_description   = $request->news_short_description;
            $news->news_long_description    = $request->news_long_description;
            $news->publication_status       = $request->publication_status;
            $news->save();
        }
    }
}
