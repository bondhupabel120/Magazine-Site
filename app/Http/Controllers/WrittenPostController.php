<?php

namespace App\Http\Controllers;

use App\WrittenJoke;
use App\WrittenPoem;
use App\WrittenStory;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Category;

class WrittenPostController extends Controller
{
    public function writtenStory(){
        return view('front.student.written.written-story',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    protected function checkValidateStoryData($request){
        $this->validate($request, [
            'name'          => 'required',
            'department'    => 'required',
            'student_id'    => 'required',
            'image'         => 'required|file',
            'heading'       => 'required',
            'description'   => 'required'
        ]);
    }

    public function newWrittenStory(Request $request){
        $this->checkValidateStoryData($request);

        WrittenStory::saveWrittenStoryInfo($request);
        return redirect('/students/written-story')->with('message', 'Your Story Send Successfully');
    }

    public function manageStory(){
        return view('admin.student.manage-story',[
            'stories' => WrittenStory::all()
        ]);
    }

    public function publishedStory($id){
        $story = WrittenStory::find($id);
        $story->publication_status = 1;
        $story->save();

        return redirect('/students/manage-story');
    }

    public function unpublishedStory($id){
        $story = WrittenStory::find($id);
        $story->publication_status = 0;
        $story->save();

        return redirect('/students/manage-story');
    }

    public function deleteStory(Request $request){
        WrittenStory::saveDeleteStoryInfo($request);
        return redirect('/students/manage-story')->with('message','Delete Successfully');
    }



    public function writtenPoem(){
        return view('front.student.written.written-poem',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    protected function checkValidatePoemData($request){
        $this->validate($request, [
            'name'          => 'required',
            'department'    => 'required',
            'student_id'    => 'required',
            'heading'       => 'required',
            'description'   => 'required'
        ]);
    }

    public function newWrittenPoem(Request $request){
        $this->checkValidatePoemData($request);

        WrittenPoem::saveWrittenPoemInfo($request);
        return redirect('/students/written-poem')->with('message', 'Your Poem Send Successfully');
    }

    public function managePoem(){
        return view('admin.student.manage-poem',[
            'peoms' => WrittenPoem::all()
        ]);
    }

    public function publishedPoem($id){
        $poem = WrittenPoem::find($id);
        $poem->publication_status = 1;
        $poem->save();

        return redirect('/students/manage-poem');
    }

    public function unpublishedPoem($id){
        $poem = WrittenPoem::find($id);
        $poem->publication_status = 0;
        $poem->save();

        return redirect('/students/manage-poem');
    }

    public function deletePoem(Request $request){
        WrittenPoem::saveDeletePoemInfo($request);
        return redirect('/students/manage-poem')->with('message','Delete Successfully');
    }




    public function writtenJoke(){
        return view('front.student.written.written-joke',[
            'categories'        => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories'  => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    protected function checkValidateJokesData($request){
        $this->validate($request, [
            'name'          => 'required',
            'department'    => 'required',
            'student_id'    => 'required',
            'heading'       => 'required',
            'description'   => 'required'
        ]);
    }

    public function newWrittenJoke(Request $request){
        $this->checkValidateJokesData($request);

        WrittenJoke::saveWrittenJokeInfo($request);
        return redirect('/students/written-joke')->with('message', 'Your Jokes Send Successfully');
    }

    public function manageJoke(){
        return view('admin.student.manage-joke',[
            'jokes' => WrittenJoke::all()
        ]);
    }

    public function publishedJoke($id){
        $jokes = WrittenJoke::find($id);
        $jokes->publication_status = 1;
        $jokes->save();

        return redirect('/students/manage-joke');
    }

    public function unpublishedJoke($id){
        $jokes = WrittenJoke::find($id);
        $jokes->publication_status = 0;
        $jokes->save();

        return redirect('/students/manage-joke');
    }

    public function deleteJoke(Request $request){
        WrittenJoke::saveDeleteJokeInfo($request);
        return redirect('/students/manage-joke')->with('message','Delete Successfully');
    }
}
