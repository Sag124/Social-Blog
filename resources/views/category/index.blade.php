@extends('main')

@section('title', '| Category Page')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>All categories</h1>
		</div>
		<div class="col-md-4">
			<div class="well">
			{!! Form::open(array('route' => 'category.store')) !!}
	
		{{ Form::label('name','Name:') }}
		{{ Form::text('name', null,['class' => 'form-control']) }}	
			<p></p>
		{{ Form::submit('Create New Category',['class' => 'btn btn-md btn-success center-block']) }}

		{!! Form::close() !!}
			<!--<a href="{{ route('category.store') }}" class="btn btn-primary btn-block">Create Category</a>-->
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Created At</th>
						<th>Updated At</th>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
						<td> {{ $category->id }} </td>
						<td> {{ $category->name }} </td>
						<td> {{ $category->created_at }} </td>
						<td> {{ $category->updated_at }} </td>
						<td><a href="{{ route('category.show',$category->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('category.edit', $category->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>	
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection