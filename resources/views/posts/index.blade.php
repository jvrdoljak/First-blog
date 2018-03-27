@extends('main')

@section('title', '| All Posts')

@section('content')

  <div class="row">
    <div class="col-lg-10">
      <h1>All Posts</h1>
    </div>
    <div class="col-lg-2 mt-1">
      <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary">Create New Post</a>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created at</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ substr($post->body,0,50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
            <td>{{ date( 'j M, Y H:i', strtotime($post->created_at)) }}</td>
            <td>
              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-sm">View</a>
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@stop