<div class="user-profile-menu-wrap fl-wrap">
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <ul>
            <li><a href="{{ route('mitra.home') }}" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
            <li><a href="{{ route('mitra.service') }}"><i class="fa fa-th-list"></i> Jasa Servicemu</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <ul>
            <li><a href="{{ route('mitra.profil') }}"><i class="fa fa-user-o"></i> Ubah Profil</a></li>
            <!-- <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Pesan <span>3</span></a></li> -->
            <li><a href="{{ route('mitra.password') }}"><i class="fa fa-unlock-alt"></i>Ubah Password</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->                                        
    <a href="{{ url('/mitra/logout') }}" class="log-out-btn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ url('/mitra/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
</div>