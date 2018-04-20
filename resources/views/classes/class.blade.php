@include('inc.header')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($errors) > 0)
                    @foreach($errors->all() as $error)

                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach

                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="card">
                <div class="card-header">Class</div>
                
                <div class="card-body">
                    
                    <form method="POST" action="{{ url('/addClass') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="class" class="col-sm-4 col-form-label text-md-right">{{ __('Enter Class') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="class" class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}" name="class" value="{{ old('class') }}" required autofocus>

                                @if ($errors->has('class'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Class') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@include('inc.footer')