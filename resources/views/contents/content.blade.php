@extends('master')

@section('content')

<header id="head" class="secondary">
    <div class="container">
        <h1>Contents</h1>
    </div>
</header>

<br/><br/>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">

            @if(count($videos) > 0)
            <h1>Videos</h1>
            <ul>
                @foreach($videos as $video)
                <li>{{ $video->filename }}</li>
                @endforeach
            </ul>
            @endif

            @if(count($images) > 0)
            <h1>Images</h1>
            <ul>
                @foreach($images as $image)
                <li>{{ $image->filename }}</li>
                @endforeach
            </ul>
            @endif

            @if(count($documents) > 0)
            <h1>Documents</h1>
            <ul>
                @foreach($documents as $document)
                <li>{{ $document->filename }} <i class="fa fa-file"></i></li>  
                @endforeach
            </ul>
            @endif
            
        </div>
    </div>
</div>

@endsection