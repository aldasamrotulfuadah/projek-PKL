@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-edit mr-2"></i>
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
            <form action="{{ route('userUpdate', $user->id) }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Nama :</label>
                        <input type="text" name="nama" class="form-control @error ('nama') is-invalid @enderror" value="{{ $user->nama }}">
                        @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" value="{{ $user->email }}">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }} 
                            
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <span class="text-danger">*</span>
                        <label class="form-label">Jabatan :</label>
                        <select name="Jabatan" class="form-control @error ('Jabatan') is-invalid @enderror">
                            <option disabled>-- Pilih Jabatan --</option>
                            <option value="Admin" {{ $user->Jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Bidang" {{ $user->Jabatan == 'Bidang' ? 'selected' : '' }}>Bidang</option>
                        </select>
                        @error('Jabatan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <span class="text-danger">*</span>
                        <label class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror">
                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6">
                        <span class="text-danger">*</span>
                        <label class="form-label">Password Konfirmasi :</label>
                        <input type="password" name="password_confirmation" class="form-control @error ('password') is-invalid @enderror">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-sm btn-secondary">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection