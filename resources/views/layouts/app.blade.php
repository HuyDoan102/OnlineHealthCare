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

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/JiSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    {{-- jquery --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0O6PscWjtS3m6PnfCSdi13Kvkxn18rIo&libraries=places"></script>
    <script src="{{ asset('js/maps.js') }}"></script>

    </script>

    <script>
        $(document).ready(function(){
          $(".dropdown1").hover(
              function() {
                  $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                  $(this).toggleClass('open');
              },
              function() {
                  $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                  $(this).toggleClass('open');
              }
            );
        });
    </script>
</head>
<body>

    <div id="app">
     <div class="header">
        <div class="container-fluid">
            <div class="header-grid">
                <div class="logo-nav-left">
                    <a href="{{ url('/') }}"><img class="img-responsive" src="/images/logo.png" alt="Logo" width="200" height="35"></a>
                </div>

                <!-- Search Form -->
                <div class="col-md-4 col-md-offset-2">
                    <form role="form" action="{{ route("posts.search") }}" method="GET">
                        <!-- Search Field -->
                        <div class="row">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="searchPost" placeholder="Tìm kiếm"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="header-grid-left">

                    <ul>
                        <!-- Authentication Links -->
                        @guest
                        <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a class="login" href="{{ route('login') }}">Đăng nhập</a></li>
                        <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a class="login reg" href="{{ route('register') }}">Đăng ký</a></li>
                        @else
                        <li class="dropdown" id="logout">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul  class="dropdown-menu" role="menu">
                                <li id="formlogout">
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
                <div class="clearfix"> </div>
            </div>
            <div class="logo-nav">

                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav active">
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <li><a href="{{ route('admin.dashboard.index') }}">Trang Admin</a></li>
                                @endif
                                <li><a href="/">Trang chủ</a></li>
                                <li class="agileits dropdown1">
                                    <a href="#" data-toggle="dropdown" aria-expanded="true">Chuẩn đoán</a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        <li><a href="{{ route("bmi") }}">tính bmi</a></li>
                                        <li><a href="app.html">chuẩn đoán</a></li>
                                    </ul>
                                </li>
                                <li class="agileits dropdown1">
                                    <a href="{{ route('posts.index')}}" aria-expanded="true">Bệnh lý</a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        @foreach($type_of_diseases as $type_of_disease)
                                        <li><a href="{{ route("posts.index", ['type' => $type_of_disease->id]) }}">{{ $type_of_disease->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="agileits dropdown1">
                                    <a href="{{ route('doctors.index') }}" aria-expanded="true">Bác sĩ</a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        @foreach($fields as $field)
                                        <li><a href="{{ route('doctors.index', ['fieldType' => $field->id]) }}">{{ $field->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route("articles.index") }}">Diễn đàn</a></li>
                                <li><a href="{{ route("feedbacks.index") }}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div><!-- end header -->

    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="w3ls-section w3_agileits-services" id="services">
                <h4 class="w3ls-inner-title">hiệu thuốc xung quanh bạn</h4><br><br>
                <div>
                    <div id="map" style="width: auto; height: 300px;">Google Map</div>
                </div>
            </div>
        </div>

        <div class=" footer-grid wthree_footer_copy container-fluid text-center w3_footer_grid_bottom contact">
            <ul>
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
<script>
    initMap();
</script>


</body>
</html>
