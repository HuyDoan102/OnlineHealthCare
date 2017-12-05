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
			<span class="agile-breadcrumbs"><a href="/">Trang Chủ</a> &gt;<span> Liên Hệ</span></span>
		</div>		
	</div>

	<div class="w3ls-section blog-agile-main">
		<h4 class="w3ls-inner-title text-center">Liên hệ</h4>
	</div>
	<!-- //header Dat cau hoi -->

	<div class="widget-area no-padding blank">
		<div class="status-upload">
			@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			<form action="{{ route("feedbacks.store") }}" method="POST">
				{{ csrf_field() }}
				<div class="col-md-6 {{ $errors->has('title') ? ' has-error' : '' }}">
					<input type="text" name="title" id = "tit" placeholder="Tiêu đề" required><br>
					@if ($errors->has('title'))
					<span class="help-block">
						<strong>{{ $errors->first('title') }}</strong>
					</span>
					@endif
				</div>
				<div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="email" name="email" id="mail" placeholder="Email" required><br>
					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div class="col-md-12 {{ $errors->has('content') ? 'has-error': '' }}">
					<textarea name="content" id="cont" placeholder="Nội dung" required></textarea>
					@if ($errors->has('content'))
					<span class="help-block">
						<strong>{{ $errors->first('content') }}</strong>
					</span>
					@endif
				</div>
				<button type="submit" onclick="myFunction()" class="btn-ch">Gửi liên hệ</button>
			</form>
		</div><!-- Status Upload  -->
	</div><!-- Widget Area -->
</div>
<!-- ---/Dat cau hoi--- -->

@endsection