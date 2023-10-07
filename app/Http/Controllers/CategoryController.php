<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories = Category::all();
        return view('category')->withCategories($categories);
    }

   
   
    public function store(Request $request)
    {

        $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required'
        ]);

        $name = $request->name;
        $category = new Category();
        $category->name = $name;
        
        $iconName = '_icon'.time().'.'.$request->icon->getClientOriginalExtension();

        $request->icon->move(public_path('storage/images/icons'), $iconName);
        
        $image = Image::make(public_path('storage/images/icons/'.$iconName))->resize(500, 320);
        $image->save();
        
        $category->icon = $iconName;


        if($category->save())
        {
            return back()->with('success','A New Category added successfuly :)');
        }
        else
        {
            return back()->with('faild','Cann\'t add a new Category :(');
        } 
    }

 
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if(file_exists(public_path("storage/images/icons/$category->icon"))){
            unlink(public_path("storage/images/icons/$category->icon"));
            $category->delete();
            return back()->with('success-removed','Category Removed Successfully :)');
        } 

        return back()->with('faild-removed','Remove Category Faild :(');
    }
}
