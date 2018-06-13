<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Gallery;
use App\Team;
use App\Testimonials;
use App\Introduction;
use App\Services;
use App\Offer;
use App\Featuredservices;

class WebsiteController extends Controller
{
    public function index() {
        
        $teams = Team::join('designations', 'designations.id', '=', 'teams.emp_designation')
                ->select('teams.emp_name', 'designations.designations_name','teams.emp_facebook_link','teams.emp_twitter_link','teams.emp_rss_link','teams.emp_photo')
                ->get()->toArray();
        $testimonials = Testimonials::join('designations', 'designations.id', '=', 'testimonials.designations')
                ->where('status', '1')
                ->get()->toArray();
        $introduction = Introduction::findOrFail(1)->toArray();
        $services = Services::where('show_status', '1')->where('status', '1')->get()->toArray();
        
        return view('client.index',compact('teams','testimonials','introduction','services'));
    }
    public function gallery() {
        $gallery = Gallery::all()->toArray();
        return view('client.gallery', compact('gallery'));
    }
    public function services() {
        $offer = Offer::where('show_status', '1')->where('status', '1')->get()->toArray();
        $fservice = Featuredservices::where('show_status', '1')->where('status', '1')->get()->toArray();
        return view('client.services',compact('offer','fservice'));
    }
    public function testimonial() {
        return view('client.testimonial');
    }
    
}


