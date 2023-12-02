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
                            <table class="table table-bordered text-center" style="width:100%" id="dataTable" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Judul Buku</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Tanggal Pinjam</th>
                                        <th class="text-center">Tanggal Mengembalikan</th>
                                        <th class="text-center">Status</th>
                                        @can('admin')
                                            <th class="text-center">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $peminjaman)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $peminjaman->user->name }}</td>
                                            <td>{{ $peminjaman->buku->judul }}</td>
                                            <td>{{ $peminjaman->buku->kategori }}</td>
                                            <td>{{ $peminjaman->created_at->format('d M Y') }}</td>
                                            <td>
                                                @if ($peminjaman->status === 0)
                                                    -
                                                @elseif ($peminjaman->status === 1)
                                                    {{ date('d M Y', strtotime($peminjaman->mengembalikan)) }}
                                                @else
                                                    Mohon di Tunggu
                                                @endif
                                            </td>

                                            @if ($peminjaman->status === 1)
                                                <td><span class="px-2 py-2 badge badge-success">Diterima</span></td>
                                            @elseif ($peminjaman->status === 0)
                                                <td><span class="px-2 py-2 badge badge-danger">Ditolak</span></td>
                                            @else
                                                <td><span class="px-2 py-2 badge badge-secondary">Pending</span></td>
                                            @endif
                                            @can('admin')
                                                <td>
                                                    <form action="{{ route('peminjaman.update', $peminjaman) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                            data-target="#Accept{{ $peminjaman->id }}">
                                                            Accept
                                                        </button>
                                                    </form>

                                                    <form action="{{ route('peminjaman.reject', $peminjaman->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Reject</button>
                                                    </form>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Button trigger modal -->


                    <!-- Modal -->

                        @can('admin')
                            <div class="modal fade" id="Accept{{ $peminjaman->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Pilih Tanggal Pengembalian</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group">
                                                    <label for="tanggal_mengembalikan">Tanggal Mengembalikan</label>
                                                    <input type="date" name="mengembalikan" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" data-target="#Accept{{ $peminjaman->id }}">Accept</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endcan
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
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
