@extends('dashboard')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="layout"></i></div>
                            Tabel Kelas Sesi 1
                        </h1>
                    </div>
                </div>
            </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div class="card-header">Kelas Sesi 1</div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Tiket</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Tiket</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sesi1 as $item)     
                        <tr>
                            <td>{{ $item->nama_tiket }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa-solid fa-user"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection