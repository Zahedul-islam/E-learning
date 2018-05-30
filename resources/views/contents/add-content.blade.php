@extends('master')

@section('content')

<header id="head" class="secondary">
    <div class="container">
        <h1>Add Content</h1>
    </div>
</header>

<br/><br/>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            @if(count($errors) > 0)
                    @foreach($errors->all() as $error)

                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach

                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel">

                <div class="panel-body">
                    
                    {{ Form::open(['method'=>'POST', 'route'=>'contents.store', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                        <div class="form-group">
                            <label class="col-sm-4">Series</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="series">
                                    @foreach($series as $s)
                                    <option value="{{ $s->id }}">{{ $s->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4">Category</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="category">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4">Content</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="content" onload="alert('Ok')">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Content') }}
                                </button>

                                
                            </div>
                        </div>
                    
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection