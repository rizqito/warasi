@extends('mitra.layout.frame')

@section('content')
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
                <div class="statistic-item-numder">21</div>
                <h5>Kategori Servis</h5>
            </div>
            </a> 
            </div>
        <!-- statistic-item-wrap end-->                                            
        <!-- statistic-item-wrap--> 
            <div class="statistic-item-wrap"> 
            <div class="statistic-item gradient-bg fl-wrap">
                <i class="fa fa fa-eye"></i>
                <div class="statistic-item-numder">1054</div>
                <h5>Tampilan</h5>
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
    
    <div class="dashboard-list-box fl-wrap activities">
        <div class="dashboard-header fl-wrap">
            <h3>Aktivitas Terbaru</h3>
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
@endsection
