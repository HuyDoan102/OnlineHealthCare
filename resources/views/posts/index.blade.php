@extends('layouts.app')

@section('content')

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
          <span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;<span>Bệnh Lý</span></span>
        </div>
      </div><br>
      @foreach($posts as $post)
      @if($post->status == 1)
      <tr>
        <div class="container">

          <div class="row">
            <div class="col-sm-4"> 
              <a href="{{ route('posts.show', ['post' => $post->id]) }}"><img src="/images/{{ $post->image }}" width="300" height="200"></a>
            </div>
            <div class="col-sm-8">
              <h4 class="card-header"><a href="{{ route("posts.show", $post->id) }}">{{ $post->title }} </a></h4>

              {{ $post->created_at->diffForHumans() }}
              <div class="card-body" >
                {{mb_substr($post->content,0,100-2,'UTF-8').'...' }}
              </div>
            </div>
          </div><br>
        </div>
      </tr>
      @endif
      @endforeach

      <div class="container text-center">
        <ul class="pagination">
          {{ $posts->links() }}
        </ul>
      </div>
    </tbody>
  </table>
</div>
@endsection


