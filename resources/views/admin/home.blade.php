@extends('admin.layout.frame')

@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div class="mt-3"></div>

    <div class="row clearfix">
        <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="card state_w1">
                <div class="body d-flex justify-content-between">
                    <div>
                        <h5>2,365</h5>
                        <span><i class="fa fa-eye"></i> Post View</span>
                    </div>
                    <span class="sparkbar-small">10,8,9,3,5,8,5</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="card state_w1">
                <div class="body d-flex justify-content-between">
                    <div>                                
                        <h5>365</h5>
                        <span><i class="fa fa-thumbs-up"></i> Likes</span>
                    </div>
                    <span class="sparkbar-small">8,5,2,2,1,6,4,8</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="card state_w1">
                <div class="body d-flex justify-content-between">
                    <div>
                        <h5>65</h5>
                        <span><i class="fa fa-comment"></i> Comments</span>
                    </div>
                    <span class="sparkbar-small">10,8,9,3,5,8,5</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="card state_w1">
                <div class="body d-flex justify-content-between">
                    <div>                            
                        <h5>2,055</h5>
                        <span><i class="fa fa-user"></i> Profile Views</span>
                    </div>
                    <span class="sparkbar-small">6,3,8,5,1,2,4,9</span>
                </div>
            </div>
        </div>
    </div>            
    
    <div class="row clearfix">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Activities</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <ul class="list-unstyled activity">
                        <li class="a_birthday">
                            <h4>Admin Birthday</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                            <small>1 months ago.</small>
                        </li>
                        <li class="a_code">
                            <h4>Code Change</h4>
                            <p>It is a long established fact that a reader will be distracted</p>
                            <small>1 week ago.</small>
                        </li>
                        <li class="a_contact">
                            <h4>Add New Contact</h4>
                            <code>maryamamiri@gmail.com</code>
                            <code>fideltonn@gmail.com</code>
                            <small>1 months ago.</small>
                        </li>
                        <li class="a_email">
                            <h4>New Email</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                            <small>3 months ago.</small>
                        </li>
                        <li class="a_contact">
                            <h4>Add New Contact</h4>
                            <code>maryamamiri@gmail.com</code>
                            <small>1 months ago.</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection