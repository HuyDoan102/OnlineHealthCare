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
                    <h4 class="card-title font-weight-normal text-success">45465</h4>
                    <h6 class="card-subtitle mb-4">Visitors</h6>
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
                        <i class="fa fa-shopping-cart float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-info">7895</h4>
                    <h6 class="card-subtitle mb-4">Sales</h6>
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
                    <h4 class="card-title font-weight-normal text-warning">1569</h4>
                    <h6 class="card-subtitle mb-4">Orders</h6>
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
                        <i class="fa fa-bar-chart float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-danger">$ 63259</h4>
                    <h6 class="card-subtitle mb-4">Revenue</h6>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU0f4zUCsqKWCLiGWfLe_lLUMkNw62AcQ&callback=initMap" async defer></script>
@endsection
