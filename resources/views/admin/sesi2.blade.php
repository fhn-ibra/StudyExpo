@extends('dashboard')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="grid"></i></div>
                            Kelas Sesi 2
                        </h1>
                    </div>
                </div>
            </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div class="card-header">Kelas Sesi 2</div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Tiket</th>
                            <th>Stok</th>
                            @if (Auth::user()->level == 'admin')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Tiket</th>
                            <th>Stok</th>
                            @if (Auth::user()->level == 'admin')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sesi2 as $item)     
                        <tr>
                            <td>{{ $item->nama_tiket }}</td>
                            <td>{{ $item->stok }}</td>
                            @if (Auth::user()->level == 'admin')     
                            <td>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button"
                                data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i
                                    class="fa-solid fa-pen"></i></button>
                                {{-- <a href="#" class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa-solid fa-user"></i></a> --}}
                            </td>
                            @endif
                        </tr>

                        @if (Auth::user()->level == 'admin') 
                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/edit-sesi1/{{ $item->id }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok</label>
                                                <input type="text" class="form-control" name="stok" value="{{ $item->stok }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"data-bs-dismiss="modal">Tutup</button>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@if (session('modal'))
    @push('js')
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "Stok telah di Update!",
                icon: "success"
            });
        </script>
    @endpush
@endif