@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <h3 class="text-primary mb-4">Widgets</h3>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-block">
                    <div class="clearfix">
                        <i class="fa fa-user-o float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-success">{{ $users }}</h4>
                    <h6 class="card-subtitle mb-4"><a class="users" href="{{ route('admin.users.index') }}">Users</a></h6>
                    <div class="progress">
                        <div class="progress-bar bg-success-gadient progress-slim" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-block">
                    <div class="clearfix">
                        <i class="fa fa-book float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-info">{{ $posts }}</h4>
                    <h6 class="card-subtitle mb-4"><a class="posts" href="{{ route('admin.posts.index') }}">Posts</a></h6>
                    <div class="progress">
                        <div class="progress-bar bg-info-gadient progress-slim" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-block">
                    <div class="clearfix">
                        <i class="fa fa-arrow-circle-o-right float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-warning">{{ $feedbacks }}</h4>
                    <h6 class="card-subtitle mb-4"><a class="feedbacks" href="{{ route('admin.feedbacks.index') }}">Feedbacks</a></h6>
                    <div class="progress">
                        <div class="progress-bar bg-warning-gadient progress-slim" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-block">
                    <div class="clearfix">
                        <i class="fa fa-book float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-danger">{{ $articles }}</h4>
                    <h6 class="card-subtitle mb-4"><a class="articles" href="{{ route('admin.articles.index') }}">Articles</a></h6>
                    <div class="progress">
                        <div class="progress-bar bg-danger-gadient progress-slim" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div id="map"></div>
        </div>
    </div>
</div>

@endsection

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqe88QFTLmLv83TD4XsxCDmbB0c_7UEKw&callback=initMap">
</script>
