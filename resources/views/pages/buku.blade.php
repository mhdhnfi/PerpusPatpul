@extends('layouts.main')
@section('title', 'Buku')
@section('content')

    <!-- Content Wrapper -->
    {{-- <title>{{ $title }}</title> --}}
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('partials.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal"
                            data-target="#buku">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                        </a>
                    </div>

                    <!-- Modal -->
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        <div class="modal fade text-center" id="buku" tabindex="-1" role="dialog" aria-labelledby="bukuTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bukuTitle">Tambahkan Buku</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >
                                        <div class="row g-3">
                                            <div class="col">
                                                <label>Judul</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Example: NapiXhutao"
                                                        autocomplete="off" name="judul" value="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label>Pengarang</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Example: Hu Tao"
                                                        autocomplete="off" name="pengarang" value="">
                                                </div>
                                            </div>
                                        </div>
             
                                        <div class="row">
                                            <div class="col">
                                                <label>Penerbit</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Example: Gramedia"
                                                        autocomplete="off" name="penerbit" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label>Stock</label>
                                                <div class="input-group mb-3">
                                                        <input type="number"min="1" max="100000"class="form-control"
                                                        autocomplete="off" name="stock" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori"type="text">
                                                    <option value="pendidikan">Pendidikan</option>
                                                    <option value="fiksi">Fiksi</option>
                                                    <option value="non-fiksi">Non-Fiksi</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center"class="table table-striped" style="width:100%"
                                id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Pengarang</th>
                                        <th class="text-center">Penerbit</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Stock</th>
                                        <th class="text-center">Tanggal Input</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $buku)
                                        <div class="modal fade text-center" id="editBuku{{ $buku->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="bukuTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bukuTitle">Edit Buku</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('buku.update', $buku) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="row g-3">
                                                                <div class="col">
                                                                    <label>Judul</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Example: NapiXhutao"
                                                                            autocomplete="off" name="judul"
                                                                            value="{{ $buku->judul }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <label>Pengarang</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Example: Napi" autocomplete="off"
                                                                            name="pengarang" value="{{ $buku->pengarang }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label>Penerbit</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Example: Gramedia" autocomplete="off"
                                                                            name="penerbit" value="{{ $buku->penerbit }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label>Stock</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="number"  max="100000" class="form-control"
                                                                        autocomplete="off" name="stock" value="{{ $buku->stock }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label>Kategori</label>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-control" name="kategori"
                                                                            type="text">
                                                                            <option value="pendidikan"
                                                                                {{ $buku->kategori == 'Pendidikan' ? 'selected' : '' }}>
                                                                                Pendidikan</option>
                                                                            <option value="fiksi"
                                                                                {{ $buku->kategori == 'fiksi' ? 'selected' : '' }}>
                                                                                Fiksi</option>
                                                                            <option value="non-fiksi"
                                                                                {{ $buku->kategori == 'fon-fiksi' ? 'selected' : '' }}>
                                                                                Non-Fiksi</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->pengarang }}</td>
                                            <td>{{ $buku->penerbit }}</td>
                                            <td>{{ $buku->kategori }}</td>
                                            <td>{{ $buku->stock }}</td>
                                            <td>{{ $buku->created_at->format('d M Y') }}</td>
                                            <td class="d-flex gap-1 justify-content-center">
                                                <div>
                                                    <button class="btn btn-warning btn-sm mx-2" data-toggle="modal"
                                                        data-target="#editBuku{{ $buku->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-edit" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div>
                                                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M4 7l16 0"></path>
                                                                <path d="M10 11l0 6"></path>
                                                                <path d="M14 11l0 6"></path>
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">


    <script>
        new DataTable('#dataTable');
    </script>
@endsection
@section('title')
@endsection
