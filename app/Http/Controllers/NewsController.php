<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function addNews(){
        return view('admin.news.add-news',[
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    protected function checkValidateData($request){
        $this->validate($request, [
            'news_title'             => 'required',
            'news_short_description' => 'required',
            'news_image'             => 'required|file',
            'news_audio'             => 'required'
        ]);
    }

    public function newNews(Request $request){
        $this->checkValidateData($request);

        News::saveNewsInfo($request);
        return redirect('/news/add-news')->with('message', 'News Created Successfully');
    }

    public function manageNews(){
        $news = DB::table('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.category_name')
            ->orderBy('news.id', 'desc')
            ->get();
        return view('admin.news.manage-news',[
            'newses' => $news
        ]);
    }

    public function editNews($id){
        return view('admin.news.edit-news',[
            'categories' => Category::where('publication_status', 1)->get(),
            'news'       => News::find($id)
        ]);
    }

    public function updateNews(Request $request){
        News::saveNewsUpadateInfo($request);

        return redirect('/news/manage-news')->with('message', 'News Updated Successfully');
    }

    public function deleteNews(Request $request){
        $news = News::find($request->id);
        unlink($news->news_image);
        unlink($news->news_audio);
        $news->delete();

        return redirect('/news/manage-news')->with('message', 'News Info Delete Successfully');
    }
}
