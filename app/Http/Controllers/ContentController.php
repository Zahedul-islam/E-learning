<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Category;
use App\Models\Content;
use Auth;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Content::whereIn('extension', ['mp4', 'mkv', 'flv'])->where('user_id', Auth::user()->id)->get();

        $images = Content::whereIn('extension', ['jpg', 'jpeg', 'gif', 'png'])->where('user_id', Auth::user()->id)->get();

        $documents = Content::whereIn('extension', ['doc', 'docx', 'pdf'])->where('user_id', Auth::user()->id)->get();

        return view('contents.content', ['videos' => $videos, 'images' => $images, 'documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Series::where('user_id', Auth::user()->id)->get();
        $categories = Category::all();

        return view('contents.add-content', ['series'=>$series, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('content')) {

            $file = $request->content;
            $filename = $file->getClientOriginalName();
            $extension = $file->extension();
            $file->move(public_path(). '/contents/', $filename);
            
            $content = new Content;
            $content->user_id = Auth::user()->id;
            $content->series_id = $request->series;
            $content->category_id = $request->category;
            $content->filename = $filename;
            $content->extension = $extension;
            $content->save();
        }

        return redirect()->route('contents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
