<header class="main-header dark-header fs-header sticky">
    <div class="header-inner">
        <div class="logo-holder">
            <a href="{{route('mitra.home')}}"><img src="{{ asset('template/katalog/images/logo3.png') }}" alt=""></a>
        </div>
        <div class="header-user-menu">
            <div class="header-user-name">
                <span><img src="{{ '/storage/Mitra/'.Auth::user()->foto }}" alt=""></span>
                Hallo , {{ Auth::user()->nama }}
            </div>
            <ul>
                <li><a href="{{route('mitra.profil')}}"> Ubah Profil</a></li>
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
    </div>
</header>