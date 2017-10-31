<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{-- jquery --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var gmap = new google.maps.LatLng(10.765974,106.689422);
        var marker;
        function initialize()
        {
            var mapProp = {
                center:new google.maps.LatLng(10.765974,106.689422),
                zoom:16,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap")
                ,mapProp);

            var styles = [
            {
                featureType: 'road.arterial',
                elementType: 'all',
                stylers: [
                { hue: '#fff' },
                { saturation: 100 },
                { lightness: -48 },
                { visibility: 'on' }
                ]
            },{
                featureType: 'road',
                elementType: 'all',
                stylers: [

                ]
            },
            {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [
                { color: '#adc9b8' }
                ]
            },{
                featureType: 'landscape.natural',
                elementType: 'all',
                stylers: [
                { hue: '#809f80' },
                { lightness: -35 }
                ]
            }
            ];

            var styledMapType = new google.maps.StyledMapType(styles);
            map.mapTypes.set('Styled', styledMapType);

            marker = new google.maps.Marker({
                map:map,
                draggable:true,
                animation: google.maps.Animation.DROP,
                position: gmap
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>
    <div id="app">
       <div class="container text-center menu-top " id="header">

            <div class="col-sm-6">
                <a class="navbar-brand" href="{{ url('/') }}">
                <a href="index.php"><img class="img-responsive" src="img/logo.png" alt="Logo" width="150" height="30"></a>
                </a>
            </div>
{{-- 
            <div class="col-sm-4">

            </div> --}}

            <div class="col-sm-3">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-3 ">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-right"> 
                    <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        <li><a href="{{ route('register') }}">Đăng ký</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div> 
        </div><!-- end header -->
        <div class="container" id="menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHUẨN ĐOÁN<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="tinhBMI.php">Tính BMI</a></li>
                                <li><a href="chuanDoan.php">Chuẩn đoán</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> BỆNH LÝ <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="hoHap.php">Hô hấp</a></li>
                                            <li><a href="tieuHoa.php">Tiêu hóa </a></li>
                                            <li><a href="da.php">Da và phần phụ</a></li>
                                            <li><a href="taiMuiHong.php">Tai mũi họng</a></li>
                                            <li><a href="sinhLyNamNu.php">Sinh lý nam nữ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="timMach.php">Tim mạch</a></li>
                                            <li><a href="coXuongKhop.php">Cơ xương khớp</a></li>
                                            <li><a href="mau.php">Nội tiết, đường máu</a></li>
                                            <li><a href="truyenNhiem.php">Truyền nhiễm</a></li>
                                            <li><a href="rangMieng.php">Răng miệng</a></li>
                                            <li><a href="ngoDoc.php">Ngộ độc</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BÁC SĨ<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="bs_khoaNhi.php">Khoa nhi</a></li>
                                <li><a href="bs_khoaTieuHoa.php">Khoa tiêu hóa - Gan mật</a></li>
                                <li><a href="bs_nhaKhoa.php">Nha khoa</a></li>
                                <li><a href="bs_khoaTimMach.php">Khoa tim mạch</a></li>
                                <li><a href="bs_khoaPhuSan.php">Khoa phụ sản</a></li>
                                <li><a href="bs_khoaSinhLy.php">Khoa Sinh Ly Nam Nu</a></li>
                                <li><a href="bs_khoaTaiMuiHong.php">Khoa tai mũi họng</a></li>
                                <li><a href="bs_khoaThanKinh.php">Khoa thần kinh</a></li>
                                <li><a href="bs_khoaXuongKhop.php">Khoa xương khớp</a></li>
                            </ul>
                        </li>

                        <li><a href="#">DIỄN ĐÀN</a></li>
                    </ul>
                </div>
            </nav>
        </div> <!-- end menu -->

        @yield('content')

        <div id="footer">
            <div class="container text-center" id="map">
                <h3>HIỆU THUỐC XUNG QUANH BẠN</h3><br>
                <div id="googleMap" style="width: auto; height: 300px;">Google Map</div>
            </div>
            <footer class="container-fluid text-center">
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;Địa chỉ
                </div>
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;&nbsp;000 - 000 - 000
                </div>

                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;&nbsp;website@healthcare.com
                </div>

                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;healthcare
                </div>

            </footer>
        </div>
    </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
});
</script>

</body>
</html>
