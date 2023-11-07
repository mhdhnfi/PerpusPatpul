@section('title', 'Register')
<link rel="icon" type="image/x-icon" href="{{ asset('img/smkn40.png') }}">

<style>
    a {
        text-decoration: none;
    }

    body {
        background-image: url('{{ asset('img/perpus.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%
        height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-right i {
        font-size: 100px;
    }

    img {
        pointer-events: none;
    }

    .test {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .login-page {
        background-color: rgba(255, 255, 255, 0.4); /* Menambahkan lapisan transparan di atas gambar latar belakang */
    }
    
    
</style>

    

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Perpus40 | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/smkn40.png') }}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div class="login-page" style="font-weight: bold;">
        <img src="{{ asset('img/perpus.png') }}" class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="text-center mb-5" style="color: black; font-weight: bold; font-size: 40px;">{{ $title }}</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="{{ route('register') }}" class="row g-4" method="POST">
                                        @csrf
                                        <div class="col-12 mt-3">
                                            <label for="name">Nama Rill Cuy</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                <input type="text" name="name" id="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                                                    placeholder="Example: Asep Kopling" required autocomplete="off">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        <strong>Nama Sudah Ada</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                                    placeholder="napi@example.com" required autocomplete="off">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        <strong>Email sudah Ada</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="hutao123">
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn px-4 mt-4 text-light" type="submit"
                                                style="background: #220ED8; font-weight: bold">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div
                                    class="form-right h-100 bg-light text-white text-center p-3 shadow bg-body-tertiary rounded">
                                    <img src="{{ asset('img/smkn40.png') }}" alt="logoregislogin"
                                        style="pointer-events: none;" class="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>