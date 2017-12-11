@extends('layouts.app')
@section('content')
<div class ="container">
	<div class="w3layouts-breadcrumbs text-center">
			<div class="container">
				<span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;
					<a href="{{ route('articles.index') }}">Diễn Đàn</a>&gt; {{ ucwords($article->title) }}</span>
			</div>
	</div><br>

	<div class="w3ls-section blog-agile-main">
		<h4 class="w3ls-inner-title text-center">Diễn đàn</h4>
	</div>
	<div class="w3ls-section single-page-agile-info">
		<div class="show-top-grids-w3lagile">
			<div class="single-left">
				<div class="post-media">
					<div class="blog-text">
						<h3 class="h-t text-center">{{ $article->title }}</h3>
						<div class="entry-meta">
							<h6 class="blg"><i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}</h6>
							<div class="icons">
								<a href="#"><i class="fa fa-user"></i> ten nguoi gui</a>
								<a href="#"><i class="fa fa-comments-o"></i>{{ $article->comments->count() }}</a>
							</div>
							<div class="clearfix"></div>
							<p>{{ $article->content }}</p>
						</div>
					</div>
				</div>

				<div class="song-grid-right">
					<div class="share">
						<br><hr><br>
					</div>
				</div>

				<div class="all-comments">
					<div class="media-grids">
						@foreach($article->comments as $comment)
						<div class="media">
							<h5>{{ $comment->user->name }}</h5><br>
							<div class="row">
              <div class="col-sm-11">
                <h6 class="blg"><i class="fa fa-clock-o"></i>{{ $comment->created_at }}</h6><br><br>
              </div>
              </div>
							<div class="media-left">
								<img class="avatar" src="/images/{{ $comment->user->avatar }}" title="One movies" alt=" ">
							</div>
							<div class="media-body">
								<p>{{ $comment->comment }}</p>
							</div>
						</div><br>
						@endforeach
						<hr>
					</div>

					<h4>Bình luận:</h4>
					<div class="widget-area no-padding blank">
						<div class="status-upload">
							<form action="{{ route('article.addComment') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
								<textarea placeholder="Nội dung" name = "comment"></textarea>
								<button type="submit" class="btn-ch">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gửi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection
