@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Kategori Jasa</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Kategori Jasa</li>
            </ol>
        </div>
        <div class="right">
            <a href="{{route('admin.kategoriJasa.create')}}" class="btn btn-block btn-primary btn-icon-label">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text">Tambah Kategori</span>
            </a>
        </div>
    </div>
    <div class="mb-3"></div>
    @include('admin.layout.alert')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 c_list js-basic-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach($kategoriJasa as $kj)
                                    <tr>
                                        <td style="width: 50px;">{{$no}}</td>
                                        <td>
                                            <span class="phone"> {!! $kj->Kategori !!}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.kategoriJasa.edit',$kj) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#del-{{$kj->id}}"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    @include('admin.kategoriJasa.modal.delete')
                                    <?php $no++;?>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection