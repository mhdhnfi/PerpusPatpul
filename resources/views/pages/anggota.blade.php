@extends('layouts.main')
@section('title', 'User')
@section('content')

    <!-- Content Wrapper -->
    
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('partials.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Anggota/Admin</h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal"
                                    data-target="#buku">
                                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                                </a>
                            </div>
        
                            <!-- Modal -->
                            <form action="" method="POST">
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
                                                            <input type="text" class="form-control" placeholder="Judul buku"
                                                                autocomplete="off" name="judul" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label>Pengarang</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Nama pengarang"
                                                                autocomplete="off" name="pengarang" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Penerbit</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Judul buku"
                                                                autocomplete="off" name="penerbit" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Kategori</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Judul buku"
                                                                autocomplete="off" name="kategori" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        
        
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center"class="table table-striped" style="width:100%"
                                            id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Pengarang</th>
                                                    <th>Penerbit</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal Input</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ( $data as $buku ) 
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $buku->judul }}</td>
                                                    <td>{{ $buku->pengarang }}</td>
                                                    <td>{{ $buku->penerbit }}</td>
                                                    <td>{{ $buku->kategori }}</td>
                                                    <td>{{ $buku->created_at->format('d M Y') }}</td>
                                                </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
        
                    </div>
            <!-- /.container-fluid -->

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
