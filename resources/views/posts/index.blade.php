@extends("layouts.app")
@section('content')
@foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
        <p>{{ $post->source }}</p>
        <p>{{ $post->created_at }}</p>
@endforeach
@endsection