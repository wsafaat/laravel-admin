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
                    <li><a href="#">Forms</a></li>
                    <li class="active">Create Task</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>{{$pagename}}</strong> 
        </div>
        <div class="card-body card-block">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="list-group">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item">
                            {{$error}}
                        </li>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Obat</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_obat" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Harga Obat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="txtharga_obat" placeholder="Text" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
            </form>
        </div>
        
    </div>
</div>

@endsection