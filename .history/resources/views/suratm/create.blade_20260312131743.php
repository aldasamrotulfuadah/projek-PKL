@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
       {{ $title }} 
    </h1>

    <div class="card">
        <div class="card-header">
                <a href="{{ route('suratmasuk') }}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i>
                Kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{ route('suratmasukStore') }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal Surat :
                        </label>
                        <input type="date" name="tanggal" class="form-control">
                        @error('tanggal_surat')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nomor Surat :
                        </label>
                        <input type="text" name="nomor" class="form-control">
                        @error('nomor_surat')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Diterima Dari :
                        </label>
                        <input type="text" name="diterima_dari" class="form-control">
                        @error('diterima_dari')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Perihal :
                        </label>
                        <input type="text" name="perihal" class="form-control">
                        @error('perihal')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-6">
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
                    @error('sifat')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Diteruskan Kepada :
                        </label> 
                        <select name="Diteruskan_kepada" class="form-control">
                            <option selected>-- Pilih Bidang --</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Wasbang">Wasbang</option>
                            <option value="Wasnas">Wasnas</option>
                            <option value="Poldagri">Poldagri</option>
                        </select> 
                        @error('diteruskan_kepada')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Dengan Hormat Harap :
                        </label>
                        <select name="Dengan_Hormat_Harap" class="form-control">
                            <option selected>-- Pilih --</option>
                            <option value="Tanggapan_Dan_Saran">Tanggapan dan Saran</option>
                            <option value="Proses_Lebih_Lanjut">Proses lebih Lanjut</option>
                            <option value="Koordinasi/Konsultasi">Koordinasi/konsultasi</option>
                            <option value="Bahan_Pertimbangan">Bahan pertimbangan</option>
                    </select>
                    @error('dengan_hormat_harap')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
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