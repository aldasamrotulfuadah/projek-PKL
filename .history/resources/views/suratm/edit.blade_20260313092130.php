@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-edit mr-2"></i>
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
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal Surat :
                        </label>
                        <input type="date" name="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror" value="{{ $suratmasuk->tanggal_surat }}">
                        @error('tanggal_surat')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nomor Surat :
                        </label>
                        <input type="text" name="nomor_surat" class="form-control @error('nomor_surat') is-invalid @enderror" value="{{ $suratmasuk->nomor_surat }}">
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
                        <input type="text" name="diterima_dari" class="form-control @error('diterima_dari') is-invalid @enderror"  value="{{$suratmasuk->diterima_dari }}">
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
                        <input type="text" name="perihal" class="form-control @error('perihal') is-invalid @enderror"  value="{{ $suratmasuk->peerihal }}">
                        @error('perihal')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Sifat :
                        </label>
                        <select name="sifat" class="form-control @error('sifat') is-invalid @enderror">
                            <option selected disabled>-- Pilih Sifat Surat --</option>
                            <option value="Sangat Segera" {{ $suratmasuk->sifat == 'Sangat Segera' ? 'selected' : ''}}>Sangat Segera</option>
                            <option value="Segera" {{ $suratmasuk->sifat == 'Segera' ? 'selected' : ''}}>Segera</option>
                            <option value="Rahasia"  {{ $suratmasuk->sifat == 'Rahasia' ? 'selected' : ''}}>Rahasia</option>
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
                        <select name="diteruskan_kepada" class="form-control @error('diteruskan_kepada') is-invalid @enderror">
                            <option selected disabled>-- Pilih Bidang Terkait --</option>
                            <option value="Sekretaris" {{ $suratmasuk->diteruskan_kepada == 'Se' ? 'selected' : ''}}>Sekretaris</option>
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
                    <div class="col-xl-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Dengan Hormat Harap :
                        </label>
                        <select name="dengan_hormat_harap" class="form-control @error('dengan_hormat_harap') is-invalid @enderror">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Tanggapan dan Saran">Tanggapan dan Saran</option>
                            <option value="Proses Lebih Lanjut">Proses lebih Lanjut</option>
                            <option value="Koordinasi/Konsultasi">Koordinasi/konsultasi</option>
                            <option value="Bahan Pertimbangan">Bahan pertimbangan</option>
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