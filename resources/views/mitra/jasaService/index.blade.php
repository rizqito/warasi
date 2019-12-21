@extends('mitra.layout.frame')

@section('content')
<div class="col-md-9">
    <div class="notification success fl-wrap">
        <p>Kamu Belum Menawarkan Jasa Mu. Ayo <a href="#">publikasikan</a> sekarang.</p>
        <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
    </div>
    <div class="dashboard-list-box fl-wrap">
        <div class="dashboard-header fl-wrap">
            <h3>Jasa Service Kamu</h3>
        </div>
        <!-- dashboard-list end-->    
        <div class="dashboard-list">
            <div class="dashboard-message">
                <span class="new-dashboard-item">New</span>
                <div class="dashboard-listing-table-image">
                    <a href="listing-single.html"><img src="{{ asset('template/katalog/images/all/3.jpg') }}" alt=""></a>
                </div>
                <div class="dashboard-listing-table-text">
                    <h4><a href="listing-single.html">Event In City Hall</a></h4>
                    <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></span>
                    <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                        <span>(2 reviews)</span>
                    </div>
                    <ul class="dashboard-listing-table-opt  fl-wrap">
                        <li><a href="#" class="btn">Publikasikan <i class="fa fa-arrow-up"></i></a></li>
                        <li><a href="#">Edit <i class="fa fa-pencil-square-o"></i></a></li>
                        <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- dashboard-list end-->    
    </div>
</div>
@endsection