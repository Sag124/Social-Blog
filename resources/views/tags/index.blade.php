@extends('main')

@section('title', '| View All Tags')

@section('content')

		<div class="row">
		<div class="col-md-8">
			<h1>All Tags</h1>
		</div>
		<div class="col-md-4">
			<div class="well">
			{!! Form::open(array('route' => 'tags.store')) !!}
	
		{{ Form::label('name','Name:') }}
		{{ Form::text('name', null,['class' => 'form-control']) }}	
			<p></p>
		{{ Form::submit('Create New Tag',['class' => 'btn btn-md btn-success center-block']) }}

		{!! Form::close() !!}
			</div>
		</div>
	</div>
	
	
		<div class="row">
		<div class="col-md-12">
		<table class="table table-striped">
			<thead>
			<th>#</th>
			<th>Name</th>
			</thead>
			<tbody>
				@foreach ($tags as $tag)
				
					<tr>
						<th> {{ $tag->id }} </th>
						<th> <a href="{{ route('tags.show',$tag->id) }}">{{ $tag->name }}</a></th>
						<td><a href="{{ route('tags.show',$tag->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-default btn-sm">Edit</a><a href="{{ route('tags.destroy', $tag->id) }}" class="btn btn-default btn-sm">Delete</a></td>
					</tr>
		
				@endforeach
			</tbody>
		</table>
		</div>
		</div>
@endsection