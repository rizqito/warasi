<header class="main-header dark-header fs-header sticky">
    <div class="header-inner">
        <div class="logo-holder">
            <a href="{{route('home')}}"><img src="{{ asset('template/katalog/images/logo3.png') }}" alt=""></a>
        </div>
        <div class="header-user-menu">
            <div class="header-user-name">
            @if(Auth::user()->foto=='')
            <span><img src="{{ asset('template/katalog/images/avatar/1.jpg') }}" alt=""></span>
            @else
            <span><img src="{{ '/storage/User/'.Auth::user()->foto }}" alt=""></span>
            @endif
                Hallo , {{ Auth::user()->nama }}
            </div>
            <ul>
                <li><a href="{{route('user.profil')}}"> Ubah Profil</a></li>
                <li><a href="{{ url('/user/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
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
                    <li><a href="{{ route('user.home') }}" class="@if(request()->is('user/')) act-link @endif">Dashboard</a></li>
                    <li><a href="{{ route('user.service') }}" class="@if(request()->is('user/service')) act-link @endif">Telusuri</a></li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</header>
<!--  header end -->