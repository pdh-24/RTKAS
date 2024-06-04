<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spk Copras</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('staradmin/assets/images/favicon.png') }}" />
    <!-- Icon Material UI -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- End of Icon -->
    <!-- Tabel SPK -->
    <style>
        /* CSS styles */
        .content-info {
            background: #f9f9f9;
            padding: 40px 0;
            background-size: cover!important;
            background-position: top center!important;
            background-repeat: no-repeat!important;
            position: relative;
            padding-bottom: 100px;
        }

        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
        }

        table thead tr th,
        table tbody tr td {
            padding: 10px;
            border: 1px solid #dedede;
            text-align: center;
        }

        table tbody tr:nth-of-type(odd) {
            background: #f9f9f9;
        }

        table tbody tr td img {
            max-width: 32px;
            float: left;
            margin-right: 11px;
            margin-top: 1px;
            border: 1px solid #dedede;
        }
    </style>
    <!-- End of SPK -->
</head>
<body class="with-welcome-text">
<div class="container-scroller">
    <!-- Navbar -->
    @include('layoutscoprascoba.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- Sidebar -->
        @include('layoutscoprascoba.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <!-- Content -->
            @yield('content')
            <!-- End of Content -->
            <!-- Footer -->
            @include('layoutscoprascoba.footer')
            <!-- End of Footer -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('staradmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('staradmin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('staradmin/assets/js/template.js') }}"></script>
<script src="{{ asset('staradmin/assets/js/settings.js') }}"></script>
<script src="{{ asset('staradmin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('staradmin/assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>
</html>
