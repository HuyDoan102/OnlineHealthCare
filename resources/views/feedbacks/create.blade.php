@extends('layouts.app')

@section('content')

<!-- //Back to top -->
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	<!-- //Back to top -->
	<!-- ---Dat cau hoi--- -->
	<div class="container">
		<!-- //header Dat cau hoi -->
		<div class="w3layouts-breadcrumbs text-center">
			<div class="container">		
				<span class="agile-breadcrumbs"><a href="index.html">Trang chủ</a> &gt;<span> Liên hệ</span></span>
			</div>		
		</div>

		<div class="w3ls-section blog-agile-main">
			<h4 class="w3ls-inner-title text-center">Liên hệ</h4>
		</div>
		<!-- //header Dat cau hoi -->

		<div class="widget-area no-padding blank">
			<div class="status-upload">
				<form action="{{ route("feedbacks.store") }}" method="POST">
					{{ csrf_field() }}
					<div class="col-md-6">
						<input type="text" name="title" placeholder="Tiêu đề" required><br>
					</div>
					<div class="col-md-6">
						<input type="email" name="email" placeholder="Email" required><br>
					</div>
					<div class="col-md-12">
						<textarea name="content" placeholder="Nội dung" required></textarea>
					</div>
					<button type="submit" class="btn-ch">Gửi liên hệ</button>
				</form>
			</div><!-- Status Upload  -->
		</div><!-- Widget Area -->
	</div>
	<!-- ---/Dat cau hoi--- -->

@endsection
