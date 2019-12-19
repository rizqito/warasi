@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Mitra</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Mitra</li>
            </ol>
        </div>
        <div class="right">
            <!-- <button type="button" onclick="window.location=''" class="btn btn-block btn-primary btn-icon-label">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text">Tambah Data Mitra</span>
            </button> -->
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Data Mitra</h2>
                </div>
                <hr>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 c_list js-basic-example">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>                                    
                                    <th>Email</th>                                    
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cl1">
                                            <label class="custom-control-label" for="cl1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('template/admin/assets/images/xs/avatar1.jpg') }}" class="rounded-circle avatar" alt="">
                                        <span>John Smith</span>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="fa fa-phone"></i> 264-625-2583</span>
                                    </td>                                   
                                    <td>
                                        <span><i class="fa fa-"></i>123 6th St. Melbourne, FL 32904</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></button>                                            
                                        <button type="button" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection