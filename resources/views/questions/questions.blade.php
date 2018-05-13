@extends('master')

@section('content')


 	<header id="head" class="secondary">
            <div class="container">
                    <h1>Questions</h1>
                    <p>All questions here.All questions here.All questions here.</p>
                </div>
    </header>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">               

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                       <a href="{{ url('/add_questions') }}" class="btn btn-info" role="button">Add Question</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- /container -->
    
@endsection