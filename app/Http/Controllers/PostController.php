<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Content;
use App\Post;

class PostController extends Controller
{
    public function post(){
    	$contents = Content::all();
    	return view('posts.post',['contents' => $contents]);
    }

    public function addPost(Request $request){
    	$this->validate($request, [
    		'post_title' =>'required',
    		'post_body' =>'required',
    		'content' =>'required',
    		'post_image' =>'required'
    	]);
    	$posts = new Post;
    	$posts->post_title = $request->input('post_title');
    	
    	$posts->post_body = $request->input('post_body');
    	$posts->content = $request->input('content');

    	if(Input::hasFile('post_image')){
    		$file = Input::file('post_image');
    		$file->move(public_path(). '/posts/', $file->getClientOriginalName());
    		$url = URL::to("/") . '/posts/'. $file->getClientOriginalName();
    		    	}
    	$posts->post_image = $url;
    	$posts->save();
    	return redirect('/')->with('response','Post added successfully');

    }
}
