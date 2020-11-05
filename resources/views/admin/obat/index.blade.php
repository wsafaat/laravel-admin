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
                            <li class="active">Table Data Obat</li>
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
                            <a class="btn btn-primary pull-right" href="{{ route('obat.create') }} ">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Harga Obat</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($data as $i=>$row)
                                            <tr>
                                                <td> {{$row->id}} </td>
                                                <td>{{$row->nama_obat}}</td>
                                                <td>{{$row->harga_obat}}</td>
                                                {{-- <td>
                                                    <a href="{{ route('tugas.edit', $row->id) }}" class="btn btn-success">Edit</a>                    
                                                </td>
                                                <td>
                                                    <form action="{{ route('tugas.destroy', $row->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"> Hapus </button>
                                                    </form>
                                                </td> --}}
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