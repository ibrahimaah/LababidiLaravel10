<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class SocialMediaLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_media_links = SocialMediaLink::find(1);
        if($social_media_links)
        {
            return view('social-media-link')->with('social_media_links',$social_media_links);
        }
        return view('social-media-link');
    }

  
    public function update(Request $request)
    {
        $social_media_link = SocialMediaLink::find(1);
        //if there were not contacts data then add a new row
        if(!$social_media_link)
        {
            $social_media_link = new SocialMediaLink(); 
        }
        
        $social_media_link->facebook = $request->facebook;
        $social_media_link->instagram = $request->instagram;
        
        if($social_media_link->save())
        {
            return back()->with('success','Social Media Links Info Updated Successfully :)');
        }
        else
        {
            return back()->with('faild','Cann\'t update Social Media Links Info :(');
        }  
    }
}
