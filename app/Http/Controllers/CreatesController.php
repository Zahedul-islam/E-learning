<?php

namespace App\Http\Controllers;



class CreatesController extends Controller
{
    public function login(){
        
        return view('login');     
    } 
    public function index(){
    	
    	return view('index');     
    } 

    public function about(){
    	return view('about');
    }

     public function contact(){
    	
    	return view('contact');     
    } 

    public function courses(){

    	return view('courses');
    }

       public function price(){

    	return view('price');
    }

     public function sidebarright(){
    	
    	return view('sidebarright');     
    } 

    public function videos(){
    	return view('videos');
}
}
?>