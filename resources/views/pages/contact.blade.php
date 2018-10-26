@extends('main')

@section('title','| Create')

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Contact Me
      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </h1>
      <hr>
      {!! Form::open(array('route' => 'contact.store')) !!}
    
      {{ Form::label('email', 'Email:') }}
      {{ Form::text('email', null, ['class' => 'form-control']) }}

      {{ Form::label('subject', 'Subject:') }}
      {{ Form::text('subject', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255' ))}}

      {{ Form::label('body', 'Body:') }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}

      &nbsp;
      
      {{ Form::submit('Submit', ['class' => 'btn btn-success btn-block']) }}

      {!! Form::close() !!}
    </div>
  </div>

@endsection