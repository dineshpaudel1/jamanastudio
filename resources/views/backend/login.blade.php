<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="{{asset('assets/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{route('frontend.home')}}"><b>{{config('app.name')}}</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form action="{{ route('backend.jamana_login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <p class="mb-1">
                            <a href="{{route('password.request')}}">I forgot my password</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('assets/backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/backend/js/sb-admin-2.min.js')}}"></script>
</body>
</html>
