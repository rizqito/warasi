@extends('mitra.layout.frame')

@section('content')
<div class="profile-edit-page-header">
    <h2>Admin Panel</h2>
    <div class="breadcrumbs"><a href="{{ route('mitra.home') }}">Home</a><span>Dasboard</span></div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="fixed-bar fl-wrap">
            @include('mitra.layout.left-sidebar')
        </div>
    </div>
    <div class="col-md-9">
    <!-- profile-edit-container--> 
    <div class="profile-edit-container">
        <div class="profile-edit-header fl-wrap" style="margin-top:30px">
            <h4>Hallo , <span>{{ Auth::user()->nama }}</span></h4>
        </div>
        <!-- <div class="notification success fl-wrap">
            <p>Your listing <a href="#">Fitness Center Brooklyn</a> has been approved!</p>
            <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
        </div>                                             -->
              <!-- statistic-container--> 
        <div class="statistic-container fl-wrap">
        <!-- statistic-item-wrap--> 
            <div class="statistic-item-wrap">
            <a href="">
            <div class="statistic-item gradient-bg fl-wrap">
                <i class="fa fa-list"></i>
                <div class="statistic-item-numder">{{$kategori}}</div>
                <h5>Kategori Servis</h5>
            </div>
            </a> 
            </div>
        <!-- statistic-item-wrap end-->                                            
        <!-- statistic-item-wrap--> 
            <div class="statistic-item-wrap"> 
            <div class="statistic-item gradient-bg fl-wrap">
                <i class="fa fa fa-eye"></i>
                <div class="statistic-item-numder">2</div>
                <h5>Telah Dilihat</h5>
            </div>
            </div>
        <!-- statistic-item-wrap end-->                                             
        <!-- statistic-item-wrap--> 
            <div class="statistic-item-wrap"> 
            <div class="statistic-item gradient-bg fl-wrap">
                <i class="fa fa-comments-o"></i>
                <div class="statistic-item-numder">675</div>
                <h5>Total Ulasan</h5>
            </div>
            </div>
        <!-- statistic-item-wrap end-->                                            
        <!-- statistic-item-wrap--> 
            <div class="statistic-item-wrap"> 
            <div class="statistic-item gradient-bg fl-wrap">
                <i class="fa fa-heart-o"></i>
                <div class="statistic-item-numder">154</div>
                <h5>Telah Ditandai</h5>
            </div>
            </div>
        <!-- statistic-item-wrap end-->  
        </div>
        <!-- statistic-container end--> 
    </div>
    <!-- profile-edit-container end-->  
</div>
</div>
@endsection