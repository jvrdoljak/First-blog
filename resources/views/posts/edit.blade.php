@extends('main')

@section('title', '| Edit post')

@section('content')

	<div class="row">
        {!! Form::model( $post,  ['route' => ['posts.update', &post->id]] ) !!}
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>
		<!--Listanje podataka -->s
		<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
			<div class="jumbotron">
				<dl class="dl-horizontal">
					<dt>Create at:</dt>
					<dd>{{ date ( 'j M, Y, H:m', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated at:</dt>
					<dd>{{ date ( 'j M, Y, H:m', strtotime($post->updated_at)) }}</dd>
				</dl>	

				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-block btn-danger mb-1')) !!}
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						{{ Form::submit('Save changes', ['class' => 'btn btn-block btn-success mb-1']) }}
					</div>
				</div>				
			</div>
        </div>
        {!! Form::close() !!}
	</div>

@endsection