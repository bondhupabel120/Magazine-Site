<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request){
        $this->validate($request, [
           'category_name' => 'required'
        ]);

        Category::saveCategoryInfo($request);
        return redirect('/category/add-category')->with('message', 'Category info save successfully');
    }

    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);
    }

    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request){
        Category::saveUpdateInfo($request);

        return redirect('/category/manage-category')->with('message', 'Category Update Successfully');
    }

    public function deleteCategory(Request $request){
        $news = News::where('category_id', $request->id)->first();
        if($news){
            return redirect('/category/manage-category')->with('message', ' Sorry we can not delete it, because this category have some news');
        }
        else
        {
            $category = Category::find($request->id);
            $category->delete();
            return redirect('/category/manage-category')->with('message', 'Category Delete Successfully');
        }
    }
}
