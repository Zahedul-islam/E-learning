@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
    	<h3>Categories</h3>
    	<hr/>

    	<ul class="list-group">

    		@foreach($categories as $category)
    		<li class="list-group-item">{{ $category->name }}</li>
    		@endforeach

		</ul>

		<h3>New Category</h3>
    	<hr/>

		{{ Form::open(['method'=>'POST', 'route'=>'categories.store', 'class'=>'form-inline']) }}
		  <div class="form-group">
		    <label for="categoryName">Category name: </label>
		    <input type="text" class="form-control" id="categoryName" name="name" placeholder="e.g. Laravel" required>
		  </div>
		  <button type="submit" class="btn btn-success">Add Category</button>
		{{ Form::close() }}
    </div>
</div>
@endsection
