@extends("layouts.app")

@section("content")

<div class="container">
	<!-- //header Dien dan -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">		
			<span class="agile-breadcrumbs"><a href="index.html">Trang chủ</a> &gt;<span> Diễn đàn</span></span>
		</div>		
	</div>
	<div class="w3ls-section blog-agile-main">
		<h4 class="w3ls-inner-title text-center">Diễn đàn</h4>
	</div>
	<!-- //header Dien dan -->

	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-12">

					<div class="rolandthemes-circle-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">Mới nhất</a></li>
							<li role="presentation"><a href="#view" aria-controls="view" role="tab" data-toggle="tab">Xem nhiều</a></li>
							<li role="presentation"><a href="#question" aria-controls="question" role="tab" data-toggle="tab">Đặt câu hỏi</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="new">
								<div class="team agileits-w3layouts">
									@foreach($articles as $article)
									

									<div class="post-media">

										
											<a href="{{ route('articles.show', ['article' => $article->id]) }}"><h5 class="h-t">{{ $article->title }}</h5></a>
											<div class="entry-meta">
												<h6 class="blg"><i class="fa fa-clock-o"></i> {{ $article->updated_at }}</h6>
												<div class="icons">
													<a href="#"><i class="fa fa-user"></i>{{ $article->user_id }}</a>
													<a href="#"><i class="fa fa-comments-o"></i> 1</a>
												</div>
												<div class="clearfix"></div>
												<p>{{ mb_substr($article->content,0,300-2,'UTF-8'). '...' }}</p>
											</div>
										

									</div>
									@endforeach
									
									<div class="text-center">
										<ul class="pagination">
											{{ $articles->links() }}
										</ul>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div> 
							</div>

							<div role="tabpanel" class="tab-pane" id="question">
								<div class="widget-area no-padding blank">
									<div class="status-upload">
										<form>
											<input type="text" placeholder="Tiêu đề">
											<div class="tops"></div>
											<textarea placeholder="Nội dung" ></textarea>
											<button type="submit" class="btn-ch">Gửi thông tin đến bác sĩ</button>
										</form>
									</div><!-- Status Upload  -->
								</div><!-- Widget Area -->
							</div>

						</div>
					</div><!--/.rolandthemes-circle-tabs-->
				</div><!--/.col-md-12-->
			</div><!--/.row-->
		</div><!--/.col-md-12-->
	</div><!--/.row-->
</div>

@endsection