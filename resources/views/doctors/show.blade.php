@extends('layouts.app')
@section('content')
<div class = "container">
	<div class="w3layouts-breadcrumbs text-center">
			<div class="container">
				<span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;
					<a href="{{ route('doctors.index') }}">Bác Sĩ</a>&gt; {{ ucwords($doctor->name) }}</span>
			</div>
	</div><br>
	<!-- //header Bac si -->

	<!-- //Bac si -->
	<div class="container">
		<div class="w3ls-section blog-agile-main">
			<div class="blog-left">
				<div class="team-grid w3_agileits">
					<h5 class="h-t text-center">{{ $doctor->name }}</h5>
					<img class="col-md-3 img-w3l t1-wthree img-responsive" src="/images/{{ $doctor->avatar }}" alt="">
					<div class="col-md-9 team-w3ls-txt">
						<table class="table">
							<tbody>
									<tr>
										<td style="border: none">
											<h5>Học vị chuyên môn:<h5>
										</td>
										@foreach($doctor->fields as $field)
										<td style="border: none">
											<h5>{{ $field->name }} <h5>
										</td>
									</tr>
									<tr>
										<td style="border: none">
											<h5>Năm kinh nghiệm:</h5>
										</td>
										<td style="border: none">
											{{ $field->pivot->years_of_experience }}
										</td>
										@endforeach
									</tr>
									<tr>
										<td style="border: none">
											<h5>Email: </h5>
										</td>
										<td style="border: none">
											<h5>{{ $doctor->email }}<h5>
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
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="button-right">
			<div class="agile_form" method="POST">
				<button type="button" class="btn btn-default">Liên hệ</button>
			</div>
			<div class="clearfix"> </div>
		</div><hr>

		<h5 class="h-t">Bác sĩ cùng chuyên ngành</h5>
		@foreach($relatedDoctors as $relatedDoctor)
		<div class="col-md-6 col-sm-6 col-xs-6 team-grid w3_agileits">
			<img class="col-md-3 img-w3l t1-wthree img-responsive" src="/images/{{ $relatedDoctor->avatar }}" alt="">
			<div class="team-w3ls-txt">
				<a href="{{ route('doctors.show', $relatedDoctor->id) }}"><h5 class="h-t">{{ $relatedDoctor->name }}</h5></a>
				<div id="detail-doctor">
					<ul>
						@foreach($relatedDoctor->fields as $field)
						<li><h5>Nam kinh nghiem: {{ $field->pivot->years_of_experience }}<h5><br></li>
							@endforeach
						<li><h5>Email: {{ $relatedDoctor->email }}<h5><br></li>
						<li><h5>Số điện thoại: {{ $relatedDoctor->phone }}<h5><br></li>
					</ul>
				</div>
			</div>	
			<div class="button-right">
				<div class="clearfix"> </div>
			</div>
		</div>
		@endforeach
	</div>
	<!-- //Bac si -->								
	<!-- ------------------------------- -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls-section w3_agileits-services">
				<h4 class="w3ls-inner-title">hiệu thuốc xung quanh bạn</h4><br><br>  
				<div>
					<div id="googleMap" style="width: auto; height: 300px;">Google Map</div>
				</div>
			</div>
		</div>

		<div class=" footer-grid wthree_footer_copy container-fluid text-center w3_footer_grid_bottom contact">
			<ul>			
				<div class="col-sm-3">
					<li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;Địa chỉ</li> 
				</div>

				<div class="col-sm-3">
					<li><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;&nbsp;000 - 000 - 000</li>
				</div>

				<div class="col-sm-3">
					<li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;&nbsp;website@healthcare.com</li> 
				</div>

				<div class="col-sm-3">
					<li><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;healthcare</li> 
				</div>
			</ul>
		</div>
	</div>
</div>
@endsection