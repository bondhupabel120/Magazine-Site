<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Category;
use DB;

class ContactController extends Controller
{
    public function Contact(){
        return view('front.contact.contact',[
            'categories'       => Category::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'below_categories' => Category::where('publication_status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'view_contacts'    => Contact::where('publication_status', 1)->orderBy('id', 'desc')->take(10)->get()
        ]);
    }

    public function newContact(Request $request){
        Contact::saveContactInfo($request);

        return redirect('/contact')->with('message', 'Message Send Successfully');
    }

    public function manageContact(){
        return view('admin.contact.manage-contact',[
            'contacts' => DB::table('contacts')
                        ->select('contacts.*')
                        ->orderBy('contacts.id', 'desc')
                        ->get()
        ]);
    }

    public function deleteContact(Request $request){
        Contact::deleteContactInfo($request);
        return redirect('/manage-contact')->with('message','Delete Successfully');
    }

    public function publishedMessage($id){
        $contact = Contact::find($id);
        $contact->publication_status = 1;
        $contact->save();

        return redirect('/manage-contact');
    }

    public function unpublishedMessage($id){
        $contact = Contact::find($id);
        $contact->publication_status = 0;
        $contact->save();

        return redirect('/manage-contact');
    }
}
