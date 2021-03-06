@extends('layouts.app')
@section('content')

<div class="container">
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;<span> Bác Sĩ</span></span>
		</div>
	</div>
	<div class="w3ls-section blog-agile-main">
		<h4 class="w3ls-inner-title text-center">Bác Sĩ</h4>
		<div class="blog-left">
			@foreach($doctors as $doctor)
			<div class="team-grid w3_agileits">
				<img class="col-md-3 img-w3l t1-wthree img-responsive" src="/images/{{ $doctor->image }}">
				<div class="col-md-9 team-w3ls-txt">
					<a href="{{ route('doctors.show', ['doctor' => $doctor->id] ) }}"><h5 class="h-t">{{ $doctor->username }}</h5></a>
					<div id="detail-doctor">
						<table class="table">
							<tbody>
									<tr>
										<td style="border: none">
											<h5>Học vị chuyên môn:<h5>
										</td>
										<td style="border: none">
											<h5>{{ $doctor->fieldsName }}<h5>
										</td>
									</tr>
									<tr>
										<td style="border: none">
											<h5>Năm kinh nghiệm:</h5>
										</td>
										<td style="border: none">
											<h5> {{$doctor->kinhNghiem }}<h5>
										</td>
									</tr>
									<tr>
										<td style="border: none">
											<h5>Email: </h5>
										</td>
										<td style="border: none">
											<h5>{{ $doctor->mail }}<h5>
										</td>
									</tr>
									<tr>
										<td style="border: none">
											<h5>Số điện thoại:</h5>
										</td>
										<td style="border: none">
											<h5> {{ $doctor->phone }}<h5>
										</td>
									</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			@endforeach
		</div>
		<div class="container text-center">
        <ul class="pagination">
          {{ $doctors->links() }}
        </ul>
      </div>
	</div>
</div>
@endsection
