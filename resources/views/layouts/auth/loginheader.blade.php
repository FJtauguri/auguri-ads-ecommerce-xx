<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Max Ecommerce') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="{{asset('asset/vendors/fontawesome-free/css/all.min.css')}}">


    {{-- cus start --}}

        <!-- plugins:css -->
    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/vendors/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- Custom CSS files start --}}
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css')}}">
    {{-- Custom CSS files end --}}

    @livewireStyles
</head>
<body id="page-top">

{{-- wrapper --}}

    <div class="row shadow-sm">
        @yield('auth')
    </div>

{{-- wrapper --}}


    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-3.7.1.min.js') }}"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('asset/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('asset/vendors/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/vendors/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('asset/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('asset/vendors/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('asset/vendors/js/demo/chart-pie-demo.js')}}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('asset/js/multiple-forms.js') }}"></script>

    @livewireScripts
</body>
</html>
