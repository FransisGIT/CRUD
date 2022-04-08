<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In | BRUHH</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template//plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template//dist/css/adminlte.min.css') }}">
    <link id="pagestyle" href="{{ asset('template/dist/css/argon-dashboard.css?v=2.0.2') }}" rel="stylesheet" />

</head>

<style>
    .login-page {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-image: url({{ asset('template/dist/img/zzz.jpg') }});
    }

    .card {
        border-radius: 7%;
    }

</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Login</b></h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg"></p>

                <form action="/loginuser" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-10">

                        </div>
                        <!-- /.col -->
                        <div class="col-0">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1">
                    <a href="#">Lupa kata sandi?</a>
                </p>
                <p class="mb-0">
                    <a href="" data-toggle="modal" data-target="#exampleModal" class="text-center">Belum Punya Akun?
                        Register</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    {{-- modal-live --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" id="exampleModalLabel" style="font-weight: bold">
                        REGISTER</h1>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="/registeruser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-solid fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="col-10">

                                </div>
                                <!-- /.col -->
                                <div class="col-0" style="padding: 0%">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
