@extends('layouts.app')
@section('content')

<div class="container">
	<!-- //header Dien dan -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">		
			<span class="agile-breadcrumbs"><a href="index.html">Trang chủ</a>&gt; <span>Diễn đàn</span></span>
		</div>		
	</div>

	<div class="w3ls-section blog-agile-main">
		<h4 class="w3ls-inner-title text-center">Diễn đàn</h4>
	</div>
	<!-- //header Dien dan -->

	<div class="w3ls-section single-page-agile-info">
		<!-- /movie-browse-agile -->
		<div class="show-top-grids-w3lagile">
			<div class="single-left">
				<div class="post-media">
					<div class="blog-text">
						<h3 class="h-t text-center">{{ $article->title }}</h3> {{-- hỏi cái $article là ở đâu , có phải đặt giống tên index.blade --}}
						<div class="entry-meta">
							<h6 class="blg"><i class="fa fa-clock-o"></i> {{ $article->updated_at }}</h6>
							<div class="icons">
								<a href="#"><i class="fa fa-user"></i> {{ $article->user_id }}</a>
								<a href="#"><i class="fa fa-comments-o"></i> 3</a>
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
						<div class="media">
							<h5>TOM BROWN</h5><br>
							<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6><br><br>
							<div class="media-left">
								<img src="images/m.png" title="One movies" alt=" ">
							</div>
							<div class="media-body">
								<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
								ex pretium hendrerit</p>
							</div>
						</div><br>
						<div class="media">
							<h5>TOM BROWN</h5><br>
							<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6><br><br>
							<div class="media-left">
								<img src="images/m.png" title="One movies" alt=" ">
							</div>
							<div class="media-body">
								<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
								ex pretium hendrerit</p>
							</div>
						</div><br>
						<div class="media">
							<h5>TOM BROWN</h5><br>
							<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6><br><br>
							<div class="media-left">
								<img src="images/m.png" title="One movies" alt=" ">
							</div>
							<div class="media-body">
								<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
								ex pretium hendrerit</p>
							</div>
						</div><br><hr>
					</div>

					<h4>Bình luận:</h4>
					<div class="widget-area no-padding blank">
						<div class="status-upload">
							<form>
								<textarea placeholder="Nội dung" ></textarea>
								<button type="submit" class="btn-ch">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gửi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
							</form>
						</div><!-- Status Upload  -->
					</div><!-- Widget Area -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection