@extends('main')

@section('title', '| Edit Category')

@section('content')
	
	<div class="row">
	{!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PUT']) !!}

	<div class="col-md-8">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}
	</div>
	
	<div class="col-md-4">
		<div class="well">

		
			<dl class="dl-horizontal">
				<dt>Created at:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($category->created_at)) }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($category->updated_at)) }}</dd>
			</dl>
			<hr>
	<div class="row">
		<div class="col-sm-6">
		{!! Html::linkRoute('category.index', 'Cancel', array($category->id), array('class' => 'btn btn-danger btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
	</div>
@endsection