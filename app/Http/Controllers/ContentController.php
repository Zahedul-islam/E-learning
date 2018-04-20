<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ContentClass;
use App\ContentSubject;
use App\Content;


class ContentController extends Controller
{
     
    
    public function class(){
        return view('classes.class');
    }

    public function addClass(Request $request){
        $this->validate($request, [
            'class' =>'required'
        ]);
        
        $class = new ContentClass;
        $class->class = $request->input('class');
        $class->save();
        return redirect('/class')->with('response','Class added successfully');
    }

    public function subject(){
        return view('subjects.subject');
    }

    public function addSubject(Request $request){
        $this->validate($request, [
            'subject' =>'required'
        ]);
        
        $subject = new ContentSubject;
        $subject->subject = $request->input('subject');
        $subject->save();
        return redirect('/subject')->with('response','Subject added successfully');
    }

    public function content(){
        return view('contents.content');
    }

    public function addContent(Request $request){
        $this->validate($request, [
            'content' =>'required'
        ]);
        
        $content = new Content;
        $content->content = $request->input('content');
        $content->save();
        return redirect('/content')->with('response','Content added successfully');
    }


    }
