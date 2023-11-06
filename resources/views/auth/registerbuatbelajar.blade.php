@extends('layouts.main')
@section('title', 'Register')

<style>
    a {
        text-decoration: none;
    }

    .login-page {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
    }

    .form-right i {
        font-size: 100px;
    }

    img {
        pointer-events: none;
    }
</style>


<body>
    <div class="login-page" style="font-weight: bold;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="text-center mb-5" style="color: #000000; font-weight: bold; font-size: 40px;">Register</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="{{ route('register') }}" class="row g-4" method="POST">
                                        @csrf
                                        <div class="col-12 mt-3">
                                            <label>Nama Rill Cuy</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                <input type="text" class="form-control" placeholder="Asep Kopling">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                <input type="email" class="form-control"
                                                    placeholder="napi@example.com">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                <input type="password" class="form-control" placeholder="hutao123">
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
                                    <img src="img/smkn40.png" alt="" style="pointer-events: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
