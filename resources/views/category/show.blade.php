@extends('main')

@section('title', '| View Category')

@section('content')
	
		<div class="row">
	<div class="col-md-8">
	<h1>{{ $category->name }}</h1>
	</div>
	
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>Created at:</label>
				<p>{{ date('M j, Y h:ia',strtotime($category->created_at)) }}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Last Updated:</label>
				<p>{{ date('M j, Y h:ia',strtotime($category->updated_at)) }}</p>
			</dl>
			<hr>
	<div class="row">
		<div class="col-sm-6">
		{!! Html::linkRoute('category.edit', 'Edit', array($category->id), array('class' => 'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
					


					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>
			</div>

		<div class="row">
			<div class="col-md-12">
				{{ Html::linkRoute('category.index', '<< See All categories', array(), ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
			</div>
		</div>

		</div>
	</div>

	</div>
	

@endsection