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
                                            <th>Action Edit</th>
                                            <th>Action Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($data as $i=>$row)
                                            <tr>
                                                <td> {{$i+=1}} </td>
                                                <td>{{$row->nama_tugas}}</td>
                                                <td>{{$row->id_kategori}}</td>
                                                <td>{{$row->ket_tugas}}</td>
                                                
                                                @if ($row->status_tugas == 0)
                                                    <td>On Progress</td>
                                                @else
                                                    <td>Finished</td>
                                                @endif
                                                    
                                                
                                                {{-- <td>{{$row->safaat}}</td> --}}
                                                <td>
                                                    <a href="{{ route('tugas.edit', $row->id) }}" class="btn btn-success">Edit</a>                    
                                                </td>
                                                <td>
                                                    <form action="{{ route('tugas.destroy', $row->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"> Hapus </button>
                                                    </form>
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

        <script src="{{asset ('public/admin/vendors/jquery/dist/jquery.min.js')}}"></script>

        {{-- <script src="{{asset ('public/admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/jszip/dist/jszip.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script> --}}
{{-- <script src="{{asset ('public/admin/assets/js/init-scripts/data-table/datatables-init.js')}}"></script> --}}

@endsection