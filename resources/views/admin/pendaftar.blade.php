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
                            Pendaftar
                        </h1>
                    </div>
                </div>
            </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div class="card-header">Pendaftar</div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>No. Telp</th>
                            <th>Sesi 1</th>
                            <th>Sesi 2</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>No. Telp</th>
                            <th>Sesi 1</th>
                            <th>Sesi 2</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pendaftar as $item)     
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->no }}</td>
                            <td>{{ $item->sesiSatu->nama_tiket }}</td>
                            <td>{{ $item->sesiDua->nama_tiket }}</td>
                            <td>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                        class="fa-solid fa-trash-can"></i></button>
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