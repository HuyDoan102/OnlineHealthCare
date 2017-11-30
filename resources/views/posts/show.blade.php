@extends("layouts.app")

@section("content")

<div class="container">
	<div class="container" id="post">
			<br>
			<div class="text-left">
				<a href="/">TRANG CHỦ</a>  >>  <a href="{{ route("posts.index") }}">BỆNH LÝ</a>  >>  {{ $post->title }}
			</div><br>

			<div>
				<span class="glyphicon glyphicon glyphicon-time">&nbsp;{{ $post->created_at }}</span>
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

				<div class="col-sm-6">
					<h4 class="card-header"><a href="#">Tiêu đề bài viết</h4></a>
					<div class="card-body">
						<p class="card-text">Nội dung bài viết</p>
					</div>
				</div>
			</div><br>

			<div class="card-footer text-right">
				<a href="#" class="btn btn-link btn-right">Xem thêm...</a>
			</div>

		</div>

</div>

@endsection
