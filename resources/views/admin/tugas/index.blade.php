@extends('admin.layout.master')

@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Table Data Tugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">

                        @if (session()->get('sukses'))
                                <div class="alert alert-success">
                                    {{session()->get('sukses')}}
                                </div>
                        @endif

                        <div class="card">                     
                            <div class="card-header">
                                <strong class="card-title">{{ $pagename}}</strong>
                            <a class="btn btn-primary pull-right" href="{{ route('tugas.create') }} ">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>ID Kategori</th>
                                            <th>Ket Tugas</th>
                                            <th>Status Tugas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($data as $i=>$row)
                                            <tr>
                                                <td> {{$i+=1}} </td>
                                                <td>{{$row->nama_tugas}}</td>
                                                <td>{{$row->id_kategori}}</td>
                                                <td>{{$row->ket_tugas}}</td>
                                                <td>{{$row->status_tugas}}</td>
                                                <td>
                                                    <a href="" class="btn btn-green">Edit</a>
                                                    <a href="" class="btn btn-danger">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        
@endsection