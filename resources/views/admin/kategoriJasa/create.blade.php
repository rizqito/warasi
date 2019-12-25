@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Tambah Kategori</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item">Kategori Jasa</li>
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Form Tambah Kategori</h2>
                </div>
                <div class="body">
                    <form id="advanced-form" method="post" data-parsley-validate novalidate action="{{ route('admin.kategoriJasa.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="text-input1">Kategori</label>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection