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
        <div class="text-left">
          <br>
          <a href="/">TRANG CHỦ</a>  >>  HÔ HẤP
      </div><br>
        @for($i=count($posts)-1;$i>=0;$i--)
        <tr>
          <div class="container">

            <div class="row">
              <div class="col-sm-4">
                  <a href="{{ route('posts.show', $posts[$i]->id) }}"><img src="img/{{$posts[$i]->image}}" width="300" height="200"></a>
              </div>
              <div class="col-sm-8">
                <h4 class="card-header"><a href="{{ route("posts.show", $posts[$i]->id) }}">{{ $posts[$i]->title }}</a></h4>

                {{ $posts[$i]->created_at }}
              <div class="card-body" >
                {{mb_substr($posts[$i]->content,0,100-2,'UTF-8').'...' }}
              </div>
              </div>
            </div><br>
          </div>   
      </tr>
      @endfor

      <div class="container text-center">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li><a href="posts?p=1">1</a></li>
        <li><a href="posts?p=2">2</a></li>
        <li><a href="posts?p=3">3</a></li>
        <li><a href="posts?p=4">4</a></li>
        <li><a href="posts?p=5">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </div>
  </tbody>
</table>
</div>
@endsection


