@extends('backend.default')


@section('content')

<div class="large-9 columns">
	
	<h2> <i class="fa fa-tasks"></i> Products Admin Panel</h2>

	<p class="callout panel panel-custom"> Here, you can view, delete and create new Products.</p>

	<h3> Product Lists</h3> <hr>

	<ul>
		@foreach ($products as $product)
			<li>
				{{ HTML::image($product->image, $product->title, array('width'=>'50')) }}
				{{ $product->title }} - 
				{{ Form::open(array('url'=>'admin/products/destroy', 'class'=>'form-inline' )) }}
				{{ Form::hidden('id', $product->id)}}
				{{ Form::submit('Delete') }}
				{{ Form::close()}} - 

				{{ Form::open (array('url'=>'admin/products/toggle-availability','class'=>'form-inline')) }}
				{{ Form::hidden('id', $product->id )}}
				{{ Form::select('availability', array('1'=>'In Stock', '0'=>'Out of Stock'), $product->availability)}}
				{{ Form::submit('Update') }}
				{{ Form::close()}}

			</li>
		@endforeach	
	</ul>

<h3> Create New Products </h3><hr>
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
	{{Form::open( array('url'=>'admin/products/create', 'method'=>'post', 'files'=> true))}}
	<p>
		{{Form::label('category_id', 'Category')}}
		{{Form::select('category_id',$categories)}}
	</p>
	<p>
		{{Form::label('title')}}
		{{Form::text('title')}}
	</p>
	<p>
		{{Form::label('description')}}
		{{Form::textarea('description')}}
	</p>
	<p>
		{{Form::label('price')}}
		{{Form::text('price',null, array('class'=>'form-price'))}}
	</p>

		<p>
		{{Form::label('image',' Choose a product image')}}
		
		{{Form::file('image')}}
	</p>
	<p>
		<button type="submit" class="small round button" /> <i class="fa fa-th-list"></i> Create Products</button>

		{{Form::close() }}
	</p>
	
</div> <!-- end admin large 9 -->


@stop
