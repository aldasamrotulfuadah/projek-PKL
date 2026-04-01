@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
       {{ $title }} 
    </h1>


    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="" class="btn btn-sm btn-secondary">
                    <i class="fas fa-plus mr-2"></i>
                Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="bg-danger text-white">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Tanggal Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Diterima Dari</th>
                                                <th>Perihal</th>
                                                <th>Sifat</th>
                                                <th>Dengan Hormat Harap</th>
                                                <th>Diteruskan Kepada</th>
                                                <th>
                                                    <i class="fas fa-cog"></i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach
                                        </tbody>
                                    </table>
                                </div>
        </div>
    </div>
    


@endsection