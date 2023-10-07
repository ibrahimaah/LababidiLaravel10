<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\User;

use App\Models\About;
use App\Models\Image;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Category;
use App\Models\Popup;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $images = Slider::all();
        $categories = Category::all();
        $services = About::all();
        $contacts = Contact::find(1);
        $counters = Counter::find(1);
        $social = SocialMediaLink::find(1);
        $user = User::find(1);
        $popup = Popup::find(1);
        //$map = Map::find(1);
        return view('main')->withImages($images)->withServices($services)->withContacts($contacts)->withCategories($categories)->withCounters($counters)->withUser($user)->withSocial($social)->withPopup($popup);
        // $categories = Category::all();
        // $images = Image::all();
        // if($categories && count($categories) > 0)
        // {
        //     return view('main')->withCategories($categories)->withImages($images);
        // }
        // else
        // {
        //     return view('main')->with('noData','There are no images yet');
        // }
    }
}
