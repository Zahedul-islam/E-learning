@extends('master')

@section('content')

<header id="head" class="secondary">
    <div class="container">
        <h1>Subject</h1>
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
                    
                    <form method="POST" action="{{ url('/addSubject') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="subject" class="col-sm-4 col-form-label text-md-right">{{ __('Enter Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Subject') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection