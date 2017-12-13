@extends("layouts.app")

@section("content")

<div class="container">
		<div class="w3layouts-breadcrumbs text-center">
			<div class="container">
				<span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;
					<a href="{{ route('posts.index') }}">Bệnh Lý</a>&gt; {{ ucwords($post->title) }}</span>
			</div>
		</div><br>
		<div>
			<span class="glyphicon glyphicon glyphicon-time">&nbsp;{{ $post->created_at->diffForHumans() }}</span>				
		</div>
		<div class="blog-left">
			<div class="team-grid w3_agileits">
				<h5 class="h-t text-center">{{ $post->title }}</h5>
				<img class="col-md-3 img-w3l t1-wthree img-responsive" src="/images/{{ $post->image }}" alt="">
				<div class="col-md-9 team-w3ls-txt">
					<p>{{ $post->content }}</p><br><br>
				</div>			
				<div class="text-right"><h5><i>Theo: {{ $post->source }}</i></h5></div> 
				<div class="clearfix"> </div>

			</div>
		</div>
		<div class="clearfix"> </div>
	<hr>
	<h5 class="h-t">Bệnh lý liên quan</h5>
	@foreach($relatedPosts as $relatedPost)
	@if($relatedPost->status == 1)
	<div class="col-md-6 col-sm-6 col-xs-6 team-grid w3_agileits">
		<div class="team-w3ls-txt">
			<img class="col-md-3 img-w3l img-responsive" src="/images/{{ $relatedPost->image }}" alt="">
			<a href="{{  route('posts.show',  $relatedPost->id) }}"><h5 class="h-t">{{ $relatedPost->title }}</h5></a>
			<p>{{ mb_substr($relatedPost->content,0,70-2,'UTF-8').'...' }}</p>
		</div>	
		<div class="clearfix"> </div>
	</div>
	@endif
	@endforeach
	<div class="clearfix"> </div>
</div>


@endsection