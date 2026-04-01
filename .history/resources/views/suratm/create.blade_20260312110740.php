@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
       {{ $title }} 
    </h1>


    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('suratmasuk') }}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i>
                Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Surat :
                    </label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Nomor Surat :
                    </label>
                    <input type="text" name="nomor" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Diterima Dari :
                    </label>
                    <input type="text" name="diterima_dari" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Perihal :
                    </label>
                    <input type="text" name="perihal" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Sifat :
                    </label>
                    <input type="text" name="diterima_dari" class="form-control">
                </div>
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Dengan :
                    </label>
                    <input type="text" name="perihal" class="form-control">
                </div>
            </div>
        </div>
    </div>
    


@endsection