@extends('layouts.main')
@section('title', 'Profile')
@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('partials.topbar')

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Edit Profile') }}</div>

                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name', Auth::user()->name) }}" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email', Auth::user()->email) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="avatar">{{ __('Profile Image') }}</label>
                                        <input id="avatar" type="file" class="form-control" name="avatar">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Profile') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- End of Content Wrapper -->
    @endsection
