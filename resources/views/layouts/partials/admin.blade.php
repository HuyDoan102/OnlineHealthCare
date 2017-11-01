<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Health Care</title>
    <link rel="stylesheet" href="/node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="shortcut icon" href="/images/logo.png" />
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

</head>
<body>
    <div class=" container-scroller">
        <!--Navbar-->
        <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="#"><img src="/images/logo.png" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="/images/logo_star_mini.jpg" alt=""></a>
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
                        <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="/images/avatar.jpg" alt=""></a>
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
                            <a class="nav-link" href="{{ route("admin.roles.index") }}">
                                <!-- <i class="fa fa-wpforms"></i> -->
                                <img src="/images/role.jpg" alt="">
                                <span class="menu-title">Roles</span>
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
                            <a class="nav-link" href="">
                                <!-- <i class="fa fa-table"></i> -->
                                <img src="/images/feedback.jpg" alt="">
                                <span class="menu-title">Feedbacks</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/charts.html">
                                <!-- <i class="fa fa-bar-chart"></i> -->
                                <img src="/images/article.png" alt="">
                                <span class="menu-title">Articles</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/icons.html">
                                <!-- <i class="fa fa-font"></i> -->
                                <img src="/images/disease.png" alt="">
                                <span class="menu-title">Diseases</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/typography.html">
                                <!-- <i class="fa fa-bold"></i> -->
                                <img src="/images/field.jpg" alt="">
                                <span class="menu-title">Fields</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/typography.html">
                                <!-- <i class="fa fa-bold"></i> -->
                                <img src="/images/category.png" alt="">
                                <span class="menu-title">Type of Diseases</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <!-- <i class="fa fa-bold"></i> -->
                                <img src="/images/setting.png" alt="">
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                @yield('admin')
            </div>
        </div>
    </div>

</body>
</html>

<script src="/node_modules/tether/dist/js/tether.min.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>`
<script src="/js/off-canvas.js"></script>
<script src="/js/hoverable-collapse.js"></script>
<script src="/js/misc.js"></script>
<script src="/js/chart.js"></script>
<script src="/js/maps.js"></script>

