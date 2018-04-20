
  @include('inc.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Post</div>

                <div class="card-body">

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif

                    <div class="row">
                         <form method="POST" action="{{ url('/addPost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control{{ $errors->has('post_title') ? ' is-invalid' : '' }}" name="post_title" value="{{ old('post_title') }}" required autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="post_body" class="col-md-4 col-form-label text-md-right">{{ __('Post Body') }}</label>

                            <div class="col-md-6">
                                <textarea id="post_body" rows="7" coloum="12" class="form-control{{ $errors->has('post_body') ? ' is-invalid' : '' }}" name="post_body" value="{{ old('post_body') }}" required></textarea>

                                @if ($errors->has('post_body'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <select id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" required>
                                    <option value="">Select</option>
                                     @if(count($contents) > 0)
                                     @foreach($contents->all() as $content)
                                         <option value="{{ $content->id }}">{{ $content->content}}</option>
                                     @endforeach
                                     @endif
                                </select>

                                @if ($errors->has('content'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

  <div class="form-group row">
                            <label for="post_image" class="col-md-4 col-form-label text-md-right">{{ __('Featured Image') }}</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control{{ $errors->has('post_image') ? ' is-invalid' : '' }}" name="post_image" required>

                                @if ($errors->has('post_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('inc.footer')  
