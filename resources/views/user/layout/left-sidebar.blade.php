<div class="user-profile-menu-wrap fl-wrap">
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <ul>
            <li><a href="{{ route('user.home') }}" class="
                @if(request()->is('user') || request()->is('user/home')) user-profile-act @endif
            "><i class="fa fa-gears"></i>Dashboard</a></li>
            <li><a href="{{ route('user.service') }}" class="
                @if(request()->is('user') || request()->is('user/service')) user-profile-act @endif
            "><i class="fa fa-gears"></i>Telusuri</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <ul>
            <li><a href="{{ route('user.profil') }}"><i class="fa fa-user-o"></i> Ubah Profil</a></li>
            <!-- <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Pesan <span>3</span></a></li> -->
            <li><a href="{{ route('user.password') }}"><i class="fa fa-unlock-alt"></i>Ubah Password</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->                                        
    <a href="{{ url('/user/logout') }}" class="log-out-btn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
</div>