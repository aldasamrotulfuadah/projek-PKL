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
                    <label class="form-label">Tanggal Surat</label>
                    <input type="text" name="tanggal_surat" class="">
                </div>
            </div>
        </div>
    </div>
    


@endsection