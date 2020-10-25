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
            <form action="{{ route('tugas.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Tugas</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_tugas" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
               
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Tugas</label></div>
                        <div class="col-12 col-md-9">
                            <select name="optionid_kategori" id="select" class="form-control">
                                @foreach ($data_kategori as $kategori)
                                    <option value={{$kategori->id}}>
                                        {{$kategori->nama_kategori}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Keterangan Tugas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="txtketerangan_tugas" placeholder="Text" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Safaat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="txtnama_panggilan" placeholder="Text" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Status Tugas</label></div>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="radiostatus_tugas" value="0" class="form-check-input">On Progress
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="radiostatus_tugas" value="1" class="form-check-input">Finished
                                </label>
                            </div>
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