<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Auth;
class CategoryController extends Controller
{
    public function showCategoryPage(){

        return view('pages.addcategory');
    }

    public function category_process(Request $req){

        $validator = Validator::make(
            $req->all(),
            [
                'category_name' => 'required',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        
        $user = Auth::user();
        
        $category = new Category();

        $category->user_id=$user->id;
        $category->category_name = $req->category_name;
        $category->save();

        return back()->with('status','Category Added');






    }
}
