@extends("layouts.app")

@section("content")

<div class="container">

  <a href="{{ route("posts.index") }}">&#x21A9;Back Home Post</a>
  <h2>POST #{{$post->id}}</h2>
  <p>{{ $post->title }}</p>
  <p>{{ $post->content }}</p>

</div>

@endsection
