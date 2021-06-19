<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index(){

        
      
        return view('pages.index');
    }


   public function about(){
        
    return view('pages.about');

    }
    public function services(){
        
        return view('pages.services');
    
    }
    public function portfolio(){
        
        return view('pages.portfolio');
    
    }
    public function contact(){
        
        return view('pages.contact');
    
    }
    public function software(){
        
        return view('pages.software');
    
    }
    public function web_design(){
        
        return view('pages.web_design');
    
    }
    public function branding(){
        
        return view('pages.branding');
    
    }
    public function e_commerce(){
        
        return view('pages.e_commerce');
    
    }
    public function seo(){
        
        return view('pages.seo');
    
    }
    public function social_media(){
        
        return view('pages.social_media');
    
    }

}


