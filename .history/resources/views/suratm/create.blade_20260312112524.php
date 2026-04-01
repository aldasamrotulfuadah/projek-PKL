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
            <div class="row mb-2">
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
            <div class="row mb-2">
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
            <div class="row mb-2">
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Sifat :
                    </label>
                    <select name="sifat" class="form-control">
                        <option selected>-- Pilih Sifat --</option>
                        <option value="Sangat_Segera">Sangat Segera</option>
                        <option value="Segera">Segera</option>
                        <option value="Rahasia">Rahasia</option>
                  </select>
                </div>
                <div class="col-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Diteruskan Kepada :
                    </label> 
                    <select name="Diteruskan_kepada" class="form-control">
                        <option selected>-- Pilih Bidang --</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Wasbang">Wasbang</option>
                        <option value="Wasnas">Wasnas</option>
                        <option value="Wasbang">Wasbang</option>
                    </select> 
                </div>
            </div>
        </div>
    </div>
    


@endsection