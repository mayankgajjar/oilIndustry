<?php 
use App\News;
use App\Contactinfo;
use App\About;
use App\Slieder;
use App\Milestone;

function getFileName($file_name){	
    $temp= explode(".", $file_name);
    return $temp[0];
}
function pr($data){
    echo '<pre>';
    print_r($data);
}

function pr_exit($data){
    echo '<pre>';
    print_r($data);
    die;
}

function GetNews(){
    $result = News::where('status', 1)
            ->where('show_status', 1)
            ->orderBy('news_date', 'asc')
            ->limit(5)
            ->get()
            ->toArray();
    return $result;
}

function GetContactinfo(){
    $info = Contactinfo::first()->toArray();
    return $info;
}

function GetAboutus(){
    $about = About::first()->toArray();
    return $about;
}

function GetSlieder(){
    $result = Slieder::select('image')
            ->where('status', 1)
            ->orderBy('created_at', 'asc')
            ->get()
            ->toArray();
    return $result;
}

function GetMilestone(){
    $milestone = Milestone::first()->toArray();
    return $milestone;
}
?>