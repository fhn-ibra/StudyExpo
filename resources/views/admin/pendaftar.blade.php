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
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button"
                                            data-bs-toggle="modal" data-bs-target="#detailModal{{ $item->id }}"><i
                                                class="fa-solid fa-user"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Apakah yakin ingin
                                                    menghapus?</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="delete-pendaftar/{{ $item->id }}" method="post">
                                                @csrf
                                                <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                        data-bs-dismiss="modal">Tidak</button><button class="btn btn-danger"
                                                        type="submit">Ya, Hapus</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Detail Akun</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group mb-2">
                                                    <label for="exampleInputPassword1">Nama Akun : </label>
                                                    <input type="text" class="form-control" readonly value="{{ $item->user->name }}">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="exampleInputPassword1">Nama Email : </label>
                                                    <input type="text" class="form-control" readonly value="{{ $item->user->email }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Akun Dibuat : </label>
                                                    <input type="text" class="form-control" readonly value="{{ $item->user->created_at }}">
                                                </div>
                                            </div>
                                                <div class="modal-footer"><button class="btn btn-secondary" type="button"data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@if (session('delete'))
    @push('js')
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "Data telah terhapus!",
                icon: "success"
            });
        </script>
    @endpush
@endif
