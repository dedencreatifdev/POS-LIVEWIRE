<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('storage/style') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('storage/style') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('storage/style') }}/dist/css/adminlte.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset('storage/style') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('storage/style') }}/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('storage/style') }}/dist/css/adminlte.min.css">

    <!-- jQuery -->
    <script src="{{ asset('storage/style') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('storage/style') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('storage/style') }}/dist/js/adminlte.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="{{ asset('storage/style') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="{{ asset('storage/style') }}/plugins/toastr/toastr.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('storage/style') }}/dist/js/adminlte.min.js"></script>

    <script src="{{ asset('storage/style') }}/flash.js"></script>




</head>

<body class="text-sm hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="text-center card-header">
                <a wire:navigate href="{{ route('Dashboard.Index') }}"
                    class="h3"><b>{{ config('app.name') }}</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                {{ $slot }}

                <p class="mb-1">
                    <a href="#l">Lupa Katasandi</a>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-center">Daftar Member Baru</a>
                </p>
            </div>
        </div>
    </div>

    <?php ?>
    @if (session('error'))
        <script>
            $(function() {
                // toastr.error(
                //     "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                // );
                var pesan = '';
                pesanerror('Email atau password tidak diketahui...');
            });
        </script>
        {{-- <script src=""></script> --}}
    @endif
</body>

</html>
