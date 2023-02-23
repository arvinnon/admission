<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HAU ADMISSION PORTAL</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admission/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admission/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admission/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admission/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admission/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admission/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admission/css/vertical-layout-light/style.css') }}">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admission/images/favicon.png') }}" />
    @livewireStyles
</head>
<body>

    <div class="container-scroller"> 
        @include('admission.layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admission.layouts.sidebar')
          
            <div class="main-panel"> 
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>   
    </div>

        <script src="{{ asset('admission/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('admission/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admission/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('admission/js/dataTables.select.min.js') }}"></script>

        <script src="{{ asset('admission/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admission/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admission/js/template.js') }}"></script>
        <script src="{{ asset('admission/js/settings.js') }}"></script>
        <script src="{{ asset('admission/js/todolist.js') }}"></script>
     
        <script src="{{ asset('admission/js/dashboard.js') }}"></script>
        <script src="{{ asset('admission/ js/Chart.roundedBarCharts.js') }}"></script>
        @livewireScripts
</body>
</html>
