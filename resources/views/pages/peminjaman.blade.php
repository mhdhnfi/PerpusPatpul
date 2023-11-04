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
                <h1 class="h3 mb-2 text-gray-800">Data Peminjam</h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center"class="table table-striped" style="width:100%"
                                            id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Buku</th>
                                                    <th class="text-center">Kategori</th>
                                                    <th class="text-center">Tanggal Pinjam</th>
                                                    <th class="text-center">Tanggal Mengembalikan</th>
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
