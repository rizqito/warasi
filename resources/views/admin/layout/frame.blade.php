<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bootstrap 4 admin template with Flat design pre-built apps and pages">
<meta name="keywords" content="admin, admin theme, backend, bootstrap, bootstrap 4, bootstrap admin, clean, dashboard, modern, premium admin templates, responsive, sass">
<meta name="author" content="thememakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Admin Panel Warasi</title>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/themify-icons/themify-icons.cs') }}s">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/fontawesome/css/font-awesome.min.cs') }}s">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/charts-c3/plugin.css') }}"/>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}"/>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/admin/assets/css/main.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/parsleyjs/css/parsley.css') }}">
</head>

<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('template/admin/assets/images/brand/icon.svg') }}" width="48" height="48" alt="ArrOwlite"></div>
        <p>Please wait...</p>        
    </div>
</div>

<nav class="navbar custom-navbar">
    <div class="nav_top">
        <a class="navbar-brand" href="index-2.html"><img src="{{ asset('template/admin/assets/images/brand/icon.svg') }}" alt="ArrOwlite" /></a>
        <ul class="navbar-nav mr-auto d-none d-md-block">
            <li class="nav-item "><a class="nav-link nav-link-icon btn-dashboard active" href="javascript:void(0);"><i class="fa fa-dashboard"></i></a></li>
        </ul>
    </div>    
    <div id="navbar_main">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown xs-hide">
                <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                    <div class="py-3 px-3">
                        <h5 class="heading h6 mb-0">Notifications <span class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                    </div>
                    <div class="list-group">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                            <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                            <div class="list-group-img"><span class="avatar bg-pink">TC</span></div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                            <div class="list-group-img"><span class="avatar bg-blue">WS</span></div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                    </div>
                    <div class="py-3 text-center">
                        <a href="javascript:void(0);" class="link link-sm link--style-3">View all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">User menu</h6>
                    <a class="dropdown-item" href="page-profile.html"><i class="fa fa-user text-primary"></i>My Profile</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                    <div class="dropdown-divider" role="presentation"></div>
                    <a class="dropdown-item" href="{{ url('/admin/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt text-primary"></i>Logout</a>
                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link nav-link-icon menu_toggle" href="javascript:void(0);"><i class="fa fa-align-left"></i></a></li>
        </ul>
    </div>
</nav>

<div class="main_content">
    @include('admin.layout.left-sidebar')
    <div class="page">
        @yield('content')
    </div>
</div>

<!-- Core -->
<script src="{{ asset('template/admin/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('template/admin/assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('template/admin/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/echart/echarts.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('template/admin/assets/bundles/jvectormap.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('template/admin/assets/js/pages/index.js') }}"></script>
<script src="{{ asset('template/admin/assets/js/pages/todo-js.js') }}"></script>

<script src="{{ asset('template/admin/assets/bundles/datatablescripts.bundle.js') }}"></script>

<script src="{{ asset('template/admin/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('template/admin/assets/js/theme.js') }}"></script>
<script src="{{ asset('template/admin/assets/js/pages/jquery-datatable.js') }}"></script>
<script src="{{ asset('template/admin/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
<script src="{{ asset('template/admin/assets/js/pages/form-validation.js') }}"></script>
</body>
</html>