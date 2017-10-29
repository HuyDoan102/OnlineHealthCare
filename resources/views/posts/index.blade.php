@extends('layouts.app')

@section('content')
<div>
	@foreach($posts as $post)
		<p>{{$post->title}}</p>
		<p>{{$post->content}}</p>
		<p>{{$post->source}}</p>
		<p>{{$post->status}}</p>
		<p>{{$post->created_at}}</p>
		<hr>
	@endforeach
</div>
@endsection