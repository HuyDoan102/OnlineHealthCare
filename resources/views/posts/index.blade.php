@extends('layouts.partials.admin')

@section('admin')
<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $index => $post)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td><a href="{{ route("posts.show", $post->id) }}">{{ $post->title }}</a></td>
          <td>{{ $post->content }}</td>
          <td>{{ $post->source }}</td>
          <td>{{ $post->created_at->format('d/m/Y') }}</td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
@endsection
