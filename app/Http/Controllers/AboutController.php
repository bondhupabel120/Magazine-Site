<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;

class AboutController extends Controller
{
    public function about(){
        return view('front.about.about',[
            'categories'       => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories' => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'view_contacts'    => Contact::where('publication_status', 1)->orderBy('id', 'desc')->take(10)->get()
        ]);
    }
}
