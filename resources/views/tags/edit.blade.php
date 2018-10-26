@extends('main')

@section('title', '| Edit Tag')

@section('content')
	<div class="row">
	{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

	<div class="col-md-8">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}
	</div>
	
	<div class="col-md-4">
		<div class="well">
		
			<dl class="dl-horizontal">
				<dt>Created at:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($tag->created_at)) }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($tag->updated_at)) }}</dd>
			</dl>
			<hr>
	<div class="row">
		<div class="col-sm-6">
		{!! Html::linkRoute('tags.show', 'Cancel', array($tag->id), array('class' => 'btn btn-danger btn-block')) !!}
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
