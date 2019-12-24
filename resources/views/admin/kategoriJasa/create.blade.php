@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Validation</li>
            </ol>
        </div>
        <div class="right">
            <div class="form-group">
                <div class="input-group input-group-transparent">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-animated btn-animated-y">
                <span class="btn-inner--visible">Create New</span>
                <span class="btn-inner--hidden"><i class="fa fa-plus"></i></span>
            </button>
        </div>
    </div>
    <div class="mb-3"></div>

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Advanced Validation</h2>
                </div>
                <div class="body">
                    <form id="advanced-form" method="post" data-parsley-validate novalidate action="{{ route('admin.kategoriJasa.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="text-input1">Kategori</label>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Validate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection