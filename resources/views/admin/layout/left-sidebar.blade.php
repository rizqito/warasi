<div class="left_sidebar">
    <a class="brand-text" href="javascript:void(0);">Warasi Admin</a>
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
            <li class="@if(request()->is('admin') || request()->is('admin/home')) active @endif"><a href="{{route('admin.home')}}"><i class="ti-home"></i><span>Dashboard</span></a></li>
            
            <li class="g_heading">-- Jasa Service</li>
            <li class="@if(request()->is('admin/mitra')) active @endif"><a href="{{ route('admin.mitra') }}"><i class="fa fa-users"></i><span>Mitra</span></a></li>
            <li class="@if(request()->is('admin/pelanggan')) active @endif"><a href="{{ route('admin.pelanggan') }}"><i class="fa fa-users"></i><span>Pelanggan</span></a></li>                
            <li class="@if(request()->is('admin/teknisi')) active @endif"><a href="{{ route('admin.teknisi') }}"><i class="fa fa-users"></i><span>Teknisi</span></a></li>
            <li class="g_heading">-- Master</li>
            <li class="
                @if(request()->is('admin/berita') || request()->is('admin/berita/create') || request()->is('admin/berita/*/edit')) active @endif
            "><a href="{{route('admin.berita')}}"><i class="ti-menu-alt"></i><span>Berita</span></a></li>
            <li class="
                @if(request()->is('admin/kategori-jasa') || request()->is('admin/kategori-jasa/create') || request()->is('admin/kategori-jasa/*/edit')) active @endif
            "><a href="{{route('admin.kategoriJasa')}}"><i class="ti-menu-alt"></i><span>Kategori Jasa</span></a></li>
        </ul>            
    </nav>
</div>