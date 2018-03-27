@extends('main')

@section('title', '| View post')


@section('content')

	<div class="row">
		<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body }}</p>
		</div>
		
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
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-block btn-primary mb-1')) !!}
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-block btn-danger mb-1')) !!}
					</div>
				</div>				
			</div>
		</div>
	</div>


@endsection