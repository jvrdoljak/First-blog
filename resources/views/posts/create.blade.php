@extends('main')

@section('title', ' | Create New Post')

@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<h1>Create New Post</h1>
		<p>This post will inserted in database<br></p>
		<hr>
		<!-- Creating form -->
		{!! Form::open(['route' => 'posts.store']) !!}
    	{{ Form::label('title', 'Title:') }}
    	{{ Form::text('title', null, array('class' => 'form-control')) }}

    	{{ Form::label('body', 'Post:') }}
    	{{ Form::textarea('body', null, array('class' => 'form-control')) }}

    	{{ Form::submit('Create Post', array('class' => 'btn btn-secondary btn-block mt-3')) }}
		{!! Form::close() !!}
	</div>
</div>

@endsection