<?php

namespace App\Http\Controllers;

use App\WrittenJoke;
use App\WrittenPoem;
use App\WrittenStory;
use Illuminate\Http\Request;
use App\Category;

class ViewPostController extends Controller
{
    public function viewStory(){
        return view('front.student.view.view-story',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'story_ones'        => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'story_twos'        => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
            'story_threes'      => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(3)->take(4)->get(),
            'story_fours'       => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(7)->take(1)->get(),
            'story_fives'       => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(8)->take(2)->get(),
            'story_sixes'       => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(10)->take(1)->get(),
            'story_sevens'      => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(11)->take(5)->get(),
            'story_eights'      => WrittenStory::where('publication_status', 1)->orderBy('id', 'desc')->skip(16)->take(3)->get(),
            'popularNewses'     => WrittenStory::orderBy('hit_count', 'desc')->take(6)->get(),
        ]);
    }

    public function storyDetails($id){
        $stories = WrittenStory::find($id);
        $stories->hit_count = $stories->hit_count + 1;
        $stories->save();

        return view('front.student.view.view-story-details',[
            'categories'            => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'      => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'details_story_ones'    => WrittenStory::where('publication_status', 1)->take(1)->get(),
            'details_story_twos'    => WrittenStory::where('publication_status', 1)->skip(1)->take(5)->get(),
            'stories'               => WrittenStory::find($id),
        ]);
    }

    public function viewPoem(){
        return view('front.student.view.view-poem',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'poem_ones'         => WrittenPoem::where('publication_status', 1)->orderBy('id', 'desc')->take(20)->get(),
        ]);
    }

    public function poemDetails($id){
//        $poem = WrittenPoem::find($id);
//        $poem->hit_count = $poem->hit_count + 1;
//        $poem->save();

        return view('front.student.view.view-poem-details',[
            'categories'            => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'      => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'details_poem_ones'     => WrittenPoem::where('publication_status', 1)->take(6)->get(),
            'poems'                 => WrittenPoem::find($id),
        ]);
    }

    public function viewJoke(){
        return view('front.student.view.view-joke',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'jokes_ones'        => WrittenJoke::where('publication_status', 1)->orderBy('id', 'desc')->take(20)->get(),
        ]);
    }

    public function jokeDetails($id){
//        $poem = WrittenPoem::find($id);
//        $poem->hit_count = $poem->hit_count + 1;
//        $poem->save();

        return view('front.student.view.view-joke-details',[
            'categories'            => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'      => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'details_jokes_ones'    => WrittenJoke::where('publication_status', 1)->take(6)->get(),
            'jokes'                 => WrittenJoke::find($id),
        ]);
    }
}
