<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\News;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function index(){
        return view('front.home.home',[
            'news_ones'        => News::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'news_twos'        => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
            'news_threes'      => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(3)->take(4)->get(),
            'news_fours'       => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(7)->take(1)->get(),
            'news_fives'       => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(8)->take(2)->get(),
            'news_sixes'       => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(10)->take(1)->get(),
            'news_sevens'      => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(11)->take(5)->get(),
            'news_eights'      => News::where('publication_status', 1)->orderBy('id', 'desc')->skip(16)->take(3)->get(),
            'categories'       => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories' => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'popularNewses'    => News::orderBy('hit_count', 'desc')->take(6)->get(),
        ]);
    }

    public function categoryNews($name, $id){
        return view('front.category.category-news',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'newses_one'        => News::where('category_id', $id)->where('publication_status', 1)->orderBy('id', 'desc')->take(6)->get(),
            'newses_two'        => News::where('category_id', $id)->where('publication_status', 1)->orderBy('id', 'desc')->skip(6)->take(10)->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
        ]);
    }

    public function newsDetails($id){
        $news = News::find($id);
        $news->hit_count = $news->hit_count + 1;
        $news->save();

        return view('front.news.news-details',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'details_ones'      => News::where('publication_status', 1)->take(1)->get(),
            'details_twos'      => News::where('publication_status', 1)->skip(1)->take(5)->get(),
            'news'              => News::find($id),
            'comments'          => DB::table('comments')
                                ->select('comments.*', 'comments.name')
                                ->where('comments.news_id', $id)
                                ->where('comments.publication_status', 1)
                                ->orderBy('comments.id', 'desc')
                                ->get(),
        ]);
    }
}
