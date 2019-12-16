<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bootstrap 4 admin template with Flat design pre-built apps and pages">
<meta name="keywords" content="admin, admin theme, backend, bootstrap, bootstrap 4, bootstrap admin, clean, dashboard, modern, premium admin templates, responsive, sass">
<meta name="author" content="thememakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>:: ArrOwlite :: Home</title>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/themify-icons/themify-icons.cs') }}s">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/fontawesome/css/font-awesome.min.cs') }}s">
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/charts-c3/plugin.css') }}"/>
<link rel="stylesheet" href="{{ asset('template/admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}"/>

<link rel="stylesheet" href="{{ asset('template/admin/assets/css/main.css') }}" type="text/css">
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
            <li class="nav-item xs-hide"><a class="nav-link nav-link-icon" href="search.html"><i class="fa fa-search"></i></a></li>
            <li class="nav-item "><a class="nav-link nav-link-icon btn-dashboard active" href="javascript:void(0);"><i class="fa fa-dashboard"></i></a></li>
            <li class="nav-item "><a class="nav-link nav-link-icon btn-ui-element" href="javascript:void(0);"><i class="fa fa-object-group"></i></a></li>
            <li class="nav-item xs-hide"><a class="nav-link nav-link-icon btn-auth" href="javascript:void(0);"><i class="fa fa-lock"></i></a></li>
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
                    <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-success">$50K</span><i class="fa fa-briefcase text-primary"></i>My Balance</a>
                    <a class="dropdown-item" href="app-inbox.html"><span class="float-right badge badge-warning">4</span><i class="fa fa-envelope text-primary"></i>Inbox</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                    <div class="dropdown-divider" role="presentation"></div>
                    <a class="dropdown-item" href="pages/sign-in.html"><i class="fa fa-sign-out-alt text-primary"></i>Sign out</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link nav-link-icon rightbar_btn" href="javascript:void(0);"><i class="fa fa-cogs"></i></a></li>
            <li class="nav-item"><a class="nav-link nav-link-icon menu_toggle" href="javascript:void(0);"><i class="fa fa-align-left"></i></a></li>
        </ul>
    </div>
</nav>

<div class="main_content">
    <div class="left_sidebar">
        <a class="brand-text" href="javascript:void(0);">ArrOwlite</a>
        <ul class="navbar-nav mr-auto xs-show d-none">
            <li class="nav-item xs-hide"><a class="nav-link nav-link-icon" href="search.html"><i class="fa fa-search"></i></a>
            </li>
            <li class="nav-item "><a class="nav-link nav-link-icon btn-dashboard active" href="javascript:void(0);"><i
                        class="fa fa-dashboard"></i></a></li>
            <li class="nav-item "><a class="nav-link nav-link-icon btn-ui-element" href="javascript:void(0);"><i
                        class="fa fa-object-group"></i></a></li>
            <li class="nav-item xs-hide"><a class="nav-link nav-link-icon btn-auth" href="javascript:void(0);"><i
                        class="fa fa-lock"></i></a></li>
        </ul>
        <nav class="sidebar main_dashboard open">
            <ul class="metismenu">
                <li class="g_heading">-- Main</li>
                <li class="active"><a href="index-2.html"><i class="ti-home"></i><span>Dashboard</span></a></li>
                
                <li class="g_heading">-- Application</li>
                <li><a href="app-calendar.html"><i class="ti-calendar"></i><span>Calendar</span></a></li>
                <li><a href="app-inbox.html"><i class="fa fa-inbox"></i><span>My Inbox</span></a></li>                
                <li><a href="app-chat.html"><i class="ti-comments"></i><span>Chat Apps</span></a></li>
                <li><a href="app-contact.html"><i class="ti-id-badge"></i><span>Contact</span></a></li>
                <li><a href="app-taskboard.html"><i class="ti-notepad"></i>TaskBoard</a></li>
                <li><a href="app-todo.html"><i class="fa fa-list-ul"></i><span>Todo List</span></a></li>
                <li><a href="app-drive.html"><i class="fa fa-cloud"></i><span>My Drive</span></a></li>
                <li class="g_heading">-- Extra</li>
                <li><a href="app-widget.html"><i class="ti-widget"></i><span>Widgets</span></a></li>
                <li><a href="page-timeline.html"><i class="ti-menu-alt"></i><span>Timeline</span></a></li>
                <li><a href="page-gallery.html"><i class="fa fa-image"></i><span>Image Gallery</span></a></li>
                <li><a href="page-invoices.html"><i class="ti-file"></i><span>Invoices</span></a></li>
                <li><a href="page-faqs.html"><i class="fa fa-info-circle"></i><span>FAQs</span></a></li>
                <li><a href="page-jvectormap.html"><i class="fa fa-map-o"></i><span>JVector Maps</span></a></li>
                <li><a href="https://thememakker.com/templates/arrowlite/documentation/introduction.html"><i class="ti-file"></i>Documentation</a></li>
                <li><a href="ui-elements.html"><i class="fa fa-heart"></i>UI Kit Elements</a></li>
            </ul>            
        </nav>
        <nav class="sidebar ui_element">
            <ul class="metismenu">
                <li class="g_heading">-- Forms</li>
                <li><a href="form-elements.html"><i class="fa fa-file-text-o"></i><span>Basic Elements</span></a></li>
                <li><a href="form-advanced.html"><i class="fa fa-circle-o"></i><span>Advanced Elements</span></a></li>
                <li><a href="form-validation.html"><i class="fa fa-circle-o"></i><span>Form Validation</span></a></li>
                <li><a href="form-wizard.html"><i class="fa fa-sliders"></i><span>Form Wizard</span></a></li>
                <li><a href="form-summernote.html"><i class="fa fa-text-width"></i><span>Summernote</span></a></li>
                <li><a href="form-markdown.html"><i class="fa fa-keyboard-o"></i><span>Markdown</span></a></li>
                <li class="g_heading">-- Charts</li>
                <li><a href="charts-c3.html"><i class="fa fa-area-chart"></i><span>C3 Chart</span></a></li>
                <li><a href="charts-e.html"><i class="fa fa-area-chart"></i><span>E Chart</span></a></li>
                <li><a href="charts-sparkline.html"><i class="fa fa-bar-chart"></i><span>Sparkline Chart</span></a></li>
                <li><a href="charts-knob.html"><i class="fa fa-pie-chart"></i><span>JQuery Knob</span></a></li>
                <li class="g_heading">-- Tables</li>
                <li><a href="table-basic.html"><i class="fa fa-table"></i><span>Bootstrap Tables</span></a></li>
                <li><a href="table-datatable.html"><i class="fa fa-sort-amount-desc"></i><span>Jquery Datatable</span></a></li>
            </ul>            
        </nav>
        <nav class="sidebar ui_auth">
            <ul class="metismenu">
                <li class="g_heading">-- Authentication</li>
                <li><a href="pages/sign-in.html"><i class="fa fa-unlock-alt"></i><span>Login</span></a></li>
                <li><a href="pages/sign-up.html"><i class="fa fa-file-text-o"></i><span>Register</span></a></li>
                <li><a href="pages/forgot-password.html"><i class="fa fa-key"></i><span>Forgot password</span></a></li>
                <li><a href="pages/lock-screen.html"><i class="fa fa-lock"></i><span>Lock Screen</span></a></li>
                <li class="g_heading">-- Error Pages</li>
                <li><a href="pages/400.html"><i class="fa fa-tag"></i><span>400 error</span></a></li>
                <li><a href="pages/401.html"><i class="fa fa-tag"></i><span>401 error</span></a></li>
                <li><a href="pages/403.html"><i class="fa fa-tag"></i><span>403 error</span></a></li>
                <li><a href="pages/404.html"><i class="fa fa-warning"></i><span>404 error</span></a></li>
                <li><a href="pages/500.html"><i class="fa fa-tag"></i><span>500 error</span></a></li>
                <li><a href="pages/503.html"><i class="fa fa-tag"></i><span>503 error</span></a></li>
            </ul>            
        </nav>
    </div>

    <div class="right_sidebar">
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings" role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab" aria-controls="Contact" aria-selected="false">Contact</a></li>
        </ul>
        <hr>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                <div class="sidebar-scroll">
                    <div class="sidebar-widget px-3">
                        <h5>Theme Setting</h5>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="black"><div class="black"></div></li>
                            <li data-theme="azure"><div class="azure"></div></li>
                            <li data-theme="blue" class="active"><div class="blue"></div></li>
                            <li data-theme="purple"><div class="purple"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="green"><div class="green"></div></li>                                
                            <li data-theme="cyan"><div class="cyan"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                        </ul>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <span class="custom-switch">
                                    <span class="custom-switch-description">Mini Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-sidebar">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </span>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>Language Setting</h5>
                        <select class="selectpicker" title="Select language">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>Chinese</option>
                            <option>Hindi</option>
                            <option>Arabic</option>
                        </select>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>General Setting</h5>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <span class="custom-switch">
                                    <span class="custom-switch-description">Report Panel Usage</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </span>
                            </li>
                            <li>
                                <span class="custom-switch">
                                    <span class="custom-switch-description">Email Redirect</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </span>
                            </li>
                            <li>
                                <span class="custom-switch">
                                    <span class="custom-switch-description">Notifications</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </span>       
                            </li>
                            <li>
                                <span class="custom-switch">
                                    <span class="custom-switch-description">Location Permission</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </span> 
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">New Project</h4>
                            <h4 class="progress-percentage text-uppercase">$950</h4>
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Lucid Admin</h4>
                            <h4 class="progress-percentage text-uppercase">$10k</h4>
                            <div class="progress">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Balance</h4>
                            <h4 class="progress-percentage text-uppercase">$50k</h4>
                            <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Storage</h4>
                            <h4 class="progress-percentage text-uppercase">35GB</h4>
                            <div class="progress">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                            <span class="btn-inner--visible">Upgrade Now</span>
                            <span class="btn-inner--hidden"><i class="fa fa-arrow-right"></i></span>
                        </button>
                    </div>                    
                </div>
            </div>
            <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                <div class="sidebar-widget px-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control search" placeholder="Search...">
                    </div>
                    <ul class="list-unstyled contact-list list">
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar1.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Vincent Porter <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar2.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Mike Thomas <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar3.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar4.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar5.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar6.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar7.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="assets/images/xs/avatar8.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page">
        <div class="container-fluid">
            <div class="page_header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div class="mt-3"></div>

            <div class="row clearfix">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>2,365</h5>
                                <span><i class="fa fa-eye"></i> Post View</span>
                            </div>
                            <span class="sparkbar-small">10,8,9,3,5,8,5</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>                                
                                <h5>365</h5>
                                <span><i class="fa fa-thumbs-up"></i> Likes</span>
                            </div>
                            <span class="sparkbar-small">8,5,2,2,1,6,4,8</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>65</h5>
                                <span><i class="fa fa-comment"></i> Comments</span>
                            </div>
                            <span class="sparkbar-small">10,8,9,3,5,8,5</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>                            
                                <h5>2,055</h5>
                                <span><i class="fa fa-user"></i> Profile Views</span>
                            </div>
                            <span class="sparkbar-small">6,3,8,5,1,2,4,9</span>
                        </div>
                    </div>
                </div>
            </div>            
            
            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Activities</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled activity">
                                <li class="a_birthday">
                                    <h4>Admin Birthday</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <small>1 months ago.</small>
                                </li>
                                <li class="a_code">
                                    <h4>Code Change</h4>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <small>1 week ago.</small>
                                </li>
                                <li class="a_contact">
                                    <h4>Add New Contact</h4>
                                    <code>maryamamiri@gmail.com</code>
                                    <code>fideltonn@gmail.com</code>
                                    <small>1 months ago.</small>
                                </li>
                                <li class="a_email">
                                    <h4>New Email</h4>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                                    <small>3 months ago.</small>
                                </li>
                                <li class="a_contact">
                                    <h4>Add New Contact</h4>
                                    <code>maryamamiri@gmail.com</code>
                                    <small>1 months ago.</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="{{ asset('template/admin/assets/js/theme.js') }}"></script>
<script src="{{ asset('template/admin/assets/js/pages/index.js') }}"></script>
<script src="{{ asset('template/admin/assets/js/pages/todo-js.js') }}"></script>
</body>

</html>
