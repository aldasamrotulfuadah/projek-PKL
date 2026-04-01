@extends('layouts/app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
       {{ $title }} 
    </h1>


    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nomor Surat</th>
                                            <th>Diterima Dari</th>
                                            <th>Perihal</th>
                                            <th>File Surat</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>2011/04/25</td>
                                            <td class="text-center>
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
    


@endsection