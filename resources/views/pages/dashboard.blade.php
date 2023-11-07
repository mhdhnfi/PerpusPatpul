@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include("partials.topbar")

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Buku</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">???</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-book fa-2x" style="color: #4E73DF;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-success text-uppercase mb-1">
                                        Jumlah User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">???</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x" style="color: #1cc88a;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-info text-uppercase mb-1">Jumlah Kategori
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">???</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                                        Jumlah Request</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">???</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">
                <div class="card shadow mb-4 text-center">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Welcome {{ Auth::user()->name }}</h6>
                    </div>
                        <div class="card-body">
                            <p>Selamat Datang di "Library 40"<b class="text-uppercase ">, </b></p>
                            <p class="mb-0">Tempat di mana kata-kata menjadi jendela dunia yang tak terbatas. Di sini, kami mengundang Anda untuk meresapi kisah-kisah yang tak terhitung jumlahnya, menggali pengetahuan yang dalam, dan mengejar petualangan yang tak terlupakan. Jadilah bagian dari komunitas yang gemar membaca, karena di sini di Library 40, dunia pengetahuan dan imajinasi bertemu dalam keajaiban kata-kata.</p>
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
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    

</div>
<!-- End of Content Wrapper -->
@endsection