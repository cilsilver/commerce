@extends('backend.default')


@section('content')

  

<div class="large-9 columns">
	
	<h2> <i class="fa fa-tasks"></i> Categories Admin Panel</h2>

	<p class="callout panel panel-custom"> Here, you can view, delete and create new categories.</p>

	<h3> Categories</h3> <hr>

	<ul>
		@foreach ($categories as $category)
			<li>
				{{$category->name}} - 
				{{ Form::open(array('url'=>'admin/categories/destroy', 'class'=>'form-inline' )) }}
				{{ Form::hidden('id', $category->id)}}
				{{ Form::submit('Delete') }}
				{{ Form::close()}}

			</li>
		@endforeach	
	</ul>



<h3> Create New Category </h3><hr>
@if($errors->has())
	  <div data-alert class="alert-box warning">
		<p> The Following Errors has Occured: </p>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }} </li>
			@endforeach
		</ul>
	</div> <!-- ends alert -->
	
@endif

	{{Form::open( array('url'=>'admin/categories/create'))}}
	<p>
		{{Form::label('name')}}
		{{Form::text('name')}}
	</p>

	<p>
		<button type="submit" class="small round button" /> <i class="fa fa-th-list"></i> Create Category</button>

		{{Form::close() }}
	</p>




	
</div> <!-- end admin large 9 -->


@stop
