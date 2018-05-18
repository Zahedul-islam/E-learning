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


                    <div class="container">
                        <div class="row">
                            <section class="col-md-8 justify-content-center">
                        @if(count($questions) > 0)
                            @foreach($questions->all() as $question)
                                
                                <h4><a href="/questions/{{$question->id}}">{{$question->post_title}}</a></h4>
                                
                                <p>{{ $question->post_body }}</p>

                                <h5>By {{ $question->user->name }} &nbsp;&nbsp;
                                On {{ Carbon\Carbon::parse('2010-05-16 22:40:10')->format('l jS \\of F Y h:i:s A') }}</h5>
                               <hr/>
                            @endforeach
                            @else
                                <p>No Post Available</p>
                        @endif
                        <form method="POST" action='{{ url("")}}'>
                        {{csrf_field()}}
                            <div class="form-group">
                                <textarea id="comment" rows="6" class="form-control" name="comment" required autofocus></textarea>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Post Comment
                                    
                                </button>
                            </div>
                        </form>
                        
                            </section>
                       </div> 
                    </div>

                    
                </div>
                <div class="row">
                       <a href="{{ url('/add_question') }}" class="btn btn-info" role="button">Add Question</a> 
                </div>
            </div>
        </div>
    </div>
</div>    <!-- /container -->
    
@endsection