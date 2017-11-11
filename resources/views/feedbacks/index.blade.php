@extends('layouts.app')

@section('content')

<div class="container">
	<div class="text-center"><h2><strong>LIÊN HỆ</strong></h2><br></div>
	<form class="form-horizontal" method="POST" action="">
		<div class="row form-group">
			<div class="col-md-6">
				<div class="input-group col-md-10 col-md-offset-2">
					{{-- <input id="title" type="title" class="form-control" placeholder="Tiêu đề"> --}}
					<input id="title" type="title" class="form-control" name="title" placeholder="Tiêu đề" value="{{ old('title') }}" required>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="input-group col-md-10 col-md-offset-2">
						<input id="email" type="email" class="form-control" placeholder="Email">
					</div>
				</div>	
			</div>					
		</div>
		<div class="form-group">		
			<textarea id="content" class="form-control col-md-6 col-md-offset-1" rows="5" placeholder="Nội dung"></textarea>
		</div>
		<div class="form-group">
			<div class="form-group">
				<div class="col-md-6 col-md-offset-6">
					<button type="submit" class="btn btn-primary">Gửi</button>
				</div>
			</div>
		</div>

	</form>
</div>
@endsection
