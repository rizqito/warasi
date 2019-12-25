@extends('admin.layout.frame')
@section('content')
<div class="container-fluid">
    <div class="page_header">
        <div class="left">
            <h1>Berita</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Berita</li>
            </ol>
        </div>
        <div class="right">
            <a href="{{route('admin.berita.create')}}" class="btn btn-block btn-primary btn-icon-label">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text">Tambah Berita</span>
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
                                    <th>judul</th>
                                    <th>Foto</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach($berita as $b)
                                    <tr>
                                        <td style="width: 50px;">{{$no}}</td>
                                        <td><span class="list"> {!! $b->judul !!}</span></td>
                                        <td><span class="">{!! $b->foto !!}</span></td>
                                        <td>
                                            <a href="{{ route('admin.berita.detail',$b) }}" class="btn btn-info btn-sm" title="Detail"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('admin.berita.edit',$b) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#del-{{$b->id}}"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    @include('admin.berita.modal.delete')
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