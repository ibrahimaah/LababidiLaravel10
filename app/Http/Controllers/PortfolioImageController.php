<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Contact;
use App\Models\Category;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioImageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::find(1);
        $social = SocialMediaLink::find(1);
        if($categories && count($categories) > 0)
        {
            return view('portfolio-image')->withCategories($categories)->withContacts($contacts)->withSocial($social);
        }
        else
        {
            return view('portfolio-image')->with('noData','There are no images yet');
        }
    }

    public function getCategoryById($category_id=null)
    {
        $categories = Category::all();
        
        if($category_id) //if there is no category id , then the user needs All
        {
            $images = Image::where('category_id',$category_id)->paginate(9);
        }
        else
        {
            $images = Image::paginate(9);
        }
        
        return view('portfolio-image-category')->withCategories($categories)->withImages($images)->withCategoryId($category_id);
    }

    // public function getAllImages()
    // {
    //     $categories = Category::all();
    //     $images = Image::paginate(10);
    //     return view('portfolio-image-all')->withCategories($categories)->withImages($images);
    // }


    // public function getSelectedCategory($category_id)
    // {
    //     $categories = Category::all();
    //     $images = Image::orderBy('category_id')->get();
    //     $contacts = Contact::find(1);
    //     $id = $category_id;
    //     if($categories && count($categories) > 0)
    //     {
    //         return view('portfolio-image')->withCategories($categories)->withImages($images)->withContacts($contacts)->withId($id);
    //     }
    //     else
    //     {
    //         return view('portfolio-image')->with('noData','There are no images yet');
    //     }
    // }
}
