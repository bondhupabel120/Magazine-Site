<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Category extends Model
{
    protected $fillable = ['category_name','category_description','publication_status'];

    public static function saveCategoryInfo($request){
        $category = new Category();
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();
    }

    public static function saveUpdateInfo($request){
        $category = Category::find($request->id);
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        if ($category->publication_status == '0'){
            $newses = News::where('category_id', $request->id)
                            ->where('publication_status', 1)->get();
            foreach ($newses as $news){
                $news->publication_status = 2;
                $newses->save();
            }
        } elseif ($category->publication_status == '1'){
            $newses = News::where('category_id', $request->id)
                ->where('publication_status', 2)->get();
            foreach ($newses as $news){
                $news->publication_status = 1;
                $newses->save();
            }
        }
        $category->save();
    }
}
