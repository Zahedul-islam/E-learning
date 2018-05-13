<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;

class QuestionController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

	public function index() {
		return view('questions.add_questions');
	}

   	public function addQuestion(Request $request){

    	$request->validate([
    		'post_title' =>'required',
    		'post_body' =>'required',
    		'category_id' =>'required',
    		
    	]);
    	$questions = new Question;
    	$questions->post_title = $request->input('post_title');
    	$questions->user_id = Auth::user()->id;
    	$questions->post_body = $request->input('post_body');
    	$questions->category_id = $request->input('category_id');

    	
    	$questions->save();
    	return redirect('/questions')->with('response','Questions added successfully');

    }
}
