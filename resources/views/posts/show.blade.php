@extends("layouts.app")

@section("content")

<div class="container">
		<div class="w3ls-section blog-agile-main">
			<div class="text-left">
				<a href="/">TRANG CHỦ</a>  >>  <a href="{{ route("posts.index") }}">BỆNH LÝ</a>  >>  {{ strtoupper($post->title) }}
			</div><br>

			<div>
				<span class="glyphicon glyphicon glyphicon-time">&nbsp;{{ $post->created_at }}</span>
<<<<<<< HEAD
				<h2 class="card-header text-center"> {{ $post->title }}</h2>
			</div>

			<div class="card-body">

				<div class="col-sm-4">
					<img src="../images/{{$post->image}}" width="400" height="300">
				</div>

				<div class="col-sm-8">
					{{ $post->content }}
				</div>
			</div>
	</div>
	<hr>
		<div class="container" id="post2">
			<h4><strong>Bệnh lý liên quan</strong></h4><br>
			<div class="row">
				<div class="col-sm-6">
					<h4 class="card-header"><a href="#">Tiêu đề bài viết</h4></a>
					<div class="card-body">
						<p class="card-text">Nội dung bài viết</p>
					</div>
				</div>
=======
				<br>
				<span class="glyphicon glyphicon-eye-open">&nbsp;{{ $post->view }}</span>
				
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
>>>>>>> dev

				</div>
			</div>
			<div class="clearfix"> </div>
		</div><hr>

		<h5 class="h-t">Bệnh lý liên quan</h5>
		<div class="col-md-6 col-sm-6 col-xs-6 team-grid w3_agileits">
			<div class="team-w3ls-txt">
				<a href="#"><h5 class="h-t">Tiêu đề bài viết</h5></a>
				<p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis.</p>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 team-grid w3_agileits">
			<div class="team-w3ls-txt">
				<a href="#"><h5 class="h-t">Tiêu đề bài viết</h5></a>
				<p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis. Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non convallis felis mattis.</p>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<div class="card-footer text-right">
			<a href="#" class="btn btn-link btn-right">Xem thêm...</a>
		</div>
		<div class="clearfix"> </div>
	</div>


@endsection
