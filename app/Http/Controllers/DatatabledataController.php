<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use App\Designation;
use App\Gallery;
use App\Team;
use App\Contactinfo;
use App\About;
use App\News;
use App\Subscribers;
use App\Testimonials;
use App\Slieder;
use App\Introduction;
use App\Services;
use App\Milestone;
use App\Offer;
use App\Featuredservices;
use URL;
use DB;

class DatatabledataController extends Controller
{
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getdesignation()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $designation = Designation::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'designations_name', 'designations_status', 'created_at'])->orderBy('created_at', 'dese')->get();
        //$start = Request::get('start');
        return Datatables::of($designation)
            ->addColumn('action', function ($designation) {
                return '<a href="designation/edit/'.$designation->id.'"><i class="fa fa-pencil-square-o" title = "Edit Designation"></i></a>&nbsp; '
                        . '<a href="designation/delete/'.$designation->id.'" class="delete-designation"><i class="fa fa-trash-o" title = "Delete Designation"></i></a>';
            })
            ->editColumn('designations_status', function($designation){
                if($designation->designations_status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getgallery() {
        DB::statement(DB::raw('set @rownum=0'));
        $gallery = Gallery::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title', 'description', 'image_name', 'status'])->orderBy('created_at', 'dese')->get();
        
        return Datatables::of($gallery)
            ->addColumn('action', function ($gallery) {
                return '<a href="gallery/edit/'.$gallery->id.'"><i class="fa fa-pencil-square-o" title = "Edit Gallery"></i></a>&nbsp; '
                        . '<a href="gallery/delete/'.$gallery->id.'" class="delete-gallery"><i class="fa fa-trash-o" title = "Delete Gallery"></i></a>';
            })
            ->editColumn('image_name', function($gallery){
                //return '<a href="'.URL::asset('/gallery_images/'.$gallery->image_name).'">'.$gallery->image_name.'</a>';
                
                
                $msg =  "<img src='".URL::asset('/gallery_images/'.$gallery->image_name)."' width='200' height='100' />"; 
                //$Content = preg_replace("/&#?[a-z0-9]+;/i","",$msg); 
//                $msg = htmlentities($msg);                           
                return $msg;
            })
            ->editColumn('status', function($gallery){
                if($gallery->status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getteam() {
        DB::statement(DB::raw('set @rownum=0'));
        $team = Team::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'teams.id', 'teams.emp_name', 'designations.designations_name', 'teams.emp_status'])
                ->join('designations', 'designations.id', '=', 'teams.emp_designation')
                ->orderBy('teams.created_at', 'dese')
                ->get();
        
        return Datatables::of($team)
            ->addColumn('action', function ($team) {
                return '<a href="team/show/'.$team->id.'"><i class="fa fa-eye" title = "Show Team"></i></a>&nbsp; '
                        .'<a href="team/edit/'.$team->id.'"><i class="fa fa-pencil-square-o" title = "Edit Team"></i></a>&nbsp; '
                        . '<a href="team/delete/'.$team->id.'" class="delete-gallery"><i class="fa fa-trash-o" title = "Delete Team"></i></a>';
            })
            ->editColumn('emp_status', function($team){
                if($team->emp_status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getcontactinfo() {
        DB::statement(DB::raw('set @rownum=0'));
        $contactinfo = Contactinfo::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'address', 'phone', 'fax', 'email', 'website'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($contactinfo)
            ->addColumn('action', function ($contactinfo) {
                return '<a href="contactinfo/edit/'.$contactinfo->id.'"><i class="fa fa-pencil-square-o" title = "Edit Information"></i></a>';
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getaboutus() {
        DB::statement(DB::raw('set @rownum=0'));
        $about = About::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'description'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($about)
            ->addColumn('action', function ($about) {
                return '<a href="about/edit/'.$about->id.'"><i class="fa fa-pencil-square-o" title = "Edit Aboutus"></i></a> &nbsp'
                        . '<a href="about/show/'.$about->id.'"><i class="fa fa-eye" title = "Show Aboutus"></i></a>';
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getnews() {
        DB::statement(DB::raw('set @rownum=0'));
        $news = News::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title', 'news_date'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($news)
            ->addColumn('action', function ($news) {
                return '<a href="news/edit/'.$news->id.'"><i class="fa fa-pencil-square-o" title = "Edit News"></i></a> &nbsp'
                        . '<a href="news/show/'.$news->id.'"><i class="fa fa-eye" title = "Show News"></i></a> &nbsp'
                        .'<a href="news/delete/'.$news->id.'" class="delete-news"><i class="fa fa-trash-o" title = "Delete News"></i></a>';
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getsubscribers() {
        DB::statement(DB::raw('set @rownum=0'));
        $subscribers = Subscribers::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'email', 'created_at'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($subscribers)->make(true);
    }
    
    
    
     /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function gettestimonial() {
        DB::statement(DB::raw('set @rownum=0'));
        $testimonials = Testimonials::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id','name', 'description','status'])->orderBy('created_at', 'dese')->get();

        return Datatables::of($testimonials)
        ->addColumn('action', function ($testimonials) {
            return '<a href="testimonial/edit/'.$testimonials->id.'"><i class="fa fa-pencil-square-o" title = "Edit Testimonials"></i></a> &nbsp'
                    .'<a href="testimonial/show/'.$testimonials->id.'"><i class="fa fa-eye" title = "Show Testimonials"></i></a>&nbsp;';
        })
        ->editColumn('status', function($testimonials){
            if($testimonials->status == 1){
                return 'Show';
            } else{
                return 'Not Show';  
            }                        
        })
        ->make(true);
    }

    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getslieder() {
        DB::statement(DB::raw('set @rownum=0'));
        $slieder = Slieder::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title', 'status'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($slieder)
            ->addColumn('action', function ($slieder) {
                return '<a href="slieder/edit/'.$slieder->id.'"><i class="fa fa-pencil-square-o" title = "Edit Slieder"></i></a> &nbsp'
                        . '<a href="slieder/show/'.$slieder->id.'"><i class="fa fa-eye" title = "Show Slieder"></i></a> &nbsp'
                        .'<a href="slieder/delete/'.$slieder->id.'" class="delete-slieder"><i class="fa fa-trash-o" title = "Delete Slieder"></i></a>';
            })
            ->editColumn('status', function($slieder){
                if($slieder->status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getservices() {
        DB::statement(DB::raw('set @rownum=0'));
        $services = Services::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title', 'status', 'show_status'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($services)
            ->addColumn('action', function ($services) {
                return '<a href="services/edit/'.$services->id.'"><i class="fa fa-pencil-square-o" title = "Edit Service"></i></a> &nbsp'
                        . '<a href="services/show/'.$services->id.'"><i class="fa fa-eye" title = "Show Service"></i></a> &nbsp'
                        .'<a href="services/delete/'.$services->id.'" class="delete-service"><i class="fa fa-trash-o" title = "Delete Service"></i></a>';
            })
            ->editColumn('status', function($services){
                if($services->status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->editColumn('show_status', function($services){
                if($services->status == 1){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getintroduction() {
        DB::statement(DB::raw('set @rownum=0'));
        $introduction = Introduction::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'description', 'status'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($introduction)
            ->addColumn('action', function ($introduction) {
                return '<a href="introduction/edit/'.$introduction->id.'"><i class="fa fa-pencil-square-o" title = "Edit Introduction"></i></a> &nbsp'
                        . '<a href="introduction/show/'.$introduction->id.'"><i class="fa fa-eye" title = "Show Introduction"></i></a> &nbsp';
            })
            ->editColumn('status', function($introduction){
                if($introduction->status == 1){
                    return 'Active';
                } else{
                    return 'Inactive';  
                }                        
            })
            ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getmilestone() {
        DB::statement(DB::raw('set @rownum=0'));
        $milestone = Milestone::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id','experience', 'awards', 'workers', 'companies'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($milestone)
            ->addColumn('action', function ($milestone) {
                return '<a href="milestone/edit/'.$milestone->id.'"><i class="fa fa-pencil-square-o" title = "Edit Milestone"></i></a>';
            })
        ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getoffer() {
        DB::statement(DB::raw('set @rownum=0'));
        $offer = Offer::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id','title','description', 'show_status'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($offer)
            ->addColumn('action', function ($offer) {
                return '<a href="offer/edit/'.$offer->id.'"><i class="fa fa-pencil-square-o" title = "Edit Offer"></i></a> &nbsp'
                        . '<a href="offer/show/'.$offer->id.'"><i class="fa fa-eye" title = "Show Offer"></i></a> &nbsp'
                        . '<a href="offer/delete/'.$offer->id.'" class="delete-offer"><i class="fa fa-trash-o" title = "Delete Offer"></i></a>';
            })
             ->editColumn('show_status', function($offer){
                if($offer->show_status == 1){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
        ->make(true);
    }
    
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getfservices() {
        DB::statement(DB::raw('set @rownum=0'));
        $fservices = Featuredservices::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id','title','description', 'show_status'])->orderBy('created_at', 'dese')->get();
        return Datatables::of($fservices)
            ->addColumn('action', function ($fservices) {
                return '<a href="featuredservices/edit/'.$fservices->id.'"><i class="fa fa-pencil-square-o" title = "Edit Featured Service"></i></a> &nbsp'
                        . '<a href="featuredservices/show/'.$fservices->id.'"><i class="fa fa-eye" title = "Show Featured Service"></i></a> &nbsp'
                        . '<a href="featuredservices/delete/'.$fservices->id.'" class="delete-offer"><i class="fa fa-trash-o" title = "Delete Featured Service"></i></a>';
            })
             ->editColumn('show_status', function($fservices){
                if($fservices->show_status == 1){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
        ->make(true);
    }
    
    
    
}
