<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Health Care</title>
  <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  <link rel="shortcut icon" href="{{ asset('images/logoAdmin.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script>
    $(document).ready(function(){
      $(".dropdown").hover(
        function() {
          $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
          $(this).toggleClass('open');
        }),
        function() {
          $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
          $(this).toggleClass('open');
        };
    });
  </script>

</head>
<body>
  <div class=" container-scroller">
    <!--Navbar-->
    <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('images/logoAdmin.png') }}" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('images/logo_star_mini.jpg') }}" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 hidden-md-down">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{ asset('images/avatar.jpg') }}" alt=""></a>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ route('admin.dashboard.index') }}">Admin</a>
                </li>
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="/images/avatar.jpg" alt="">
            <p class="name">Huy, Doan</p>
            <p class="designation">Admin</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="/admin/dashboard">
                <!-- <i class="fa fa-dashboard"></i> -->
                <img src="/images/dashboard.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.users.index") }}">
                <img src="/images/user.png" alt="">
                <span class="menu-title">Users</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.posts.index") }}">
                <!-- <i class="fa fa-calculator"></i> -->
                <img src="/images/post.png" alt="">
                <span class="menu-title">Posts</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.feedbacks.index') }}">
                <!-- <i class="fa fa-table"></i> -->
                <img src="/images/feedback.jpg" alt="">
                <span class="menu-title">Feedbacks</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.articles.index') }}">
                <!-- <i class="fa fa-bar-chart"></i> -->
                <img src="/images/article.png" alt="">
                <span class="menu-title">Articles</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.diseases.index') }}">
                <!-- <i class="fa fa-font"></i> -->
                <img src="/images/disease.png" alt="">
                <span class="menu-title">Diseases</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.fields.index') }}">
                <!-- <i class="fa fa-bold"></i> -->
                <img src="/images/field.jpg" alt="">
                <span class="menu-title">Fields</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.typeofdiseases.index') }}">
                <!-- <i class="fa fa-bold"></i> -->
                <img src="/images/category.png" alt="">
                <span class="menu-title">Type of Diseases</span>
              </a>
            </li>
          </ul>
        </nav>
        @yield('admin')
      </div>
    </div>
  </div>

  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('node_modules/tether/dist/js/tether.min.js') }}"></script>

  <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>`
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/chart.js') }}"></script>
  <script src="{{ asset('js/maps.js') }}"></script>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script> CKEDITOR.replace('editor1'); </script>
  @yield ('scripts')

</body>
</html>



