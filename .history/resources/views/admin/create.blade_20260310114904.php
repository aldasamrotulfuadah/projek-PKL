@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
       {{ $title }} 
    </h1>


    <div class="card">
        <div class="card-header">
            <a href="{{ route('user') }}" class="btn btn-sm btn-secondary">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Nama :</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <span class="text-danger">*</span>
                        <label class="form-label">Jabatan :</label>
                        <select name="Jabatan" class="form-control">
                            <option selected disabled>-- Pilih Jabatan --</option>
                            <option value="Admin">Admin</option>
                            <option value="Bidang">Bidang</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-xl-6">
                        <span class="text-danger">*</span>
                        <label class="form-label">Password Konfirmasi :</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-sm btn-secondary">
                        <i class="fas fa-save mr-2"></i>
                        Simpan
                    </button>
</div>
        </form>
    </div>
</div>


@endsection