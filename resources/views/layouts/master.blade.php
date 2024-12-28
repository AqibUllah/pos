<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $setting->nama_perusahaan }} | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/dist/css/skins/_all-skins.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @stack('css')
    <style>

        :root{
            --primary:#cc3232;
            --secondary:#e54e4e;
            --bg-light: #232222;
            --bg-dark:#161820;
        }

        .main-header .navbar, .logo{
            background: var(--primary) !important;
        }

        .sidebar-toggle:hover{
            background: var(--secondary) !important;
            border-radius: 50%;
        }
        /* Custom sidebar color */
        .main-sidebar {
            background-color: var(--bg-dark) !important;
            border-right: 1px solid var(--bg-light) !important;
        }

        .sidebar a {
            color: #a4a4a4 !important;
        }

        .sidebar a.active {
            color: var(--primary) !important;
        }

        .header {
            background-color: var(--bg-light) !important;
        }

        .content-wrapper{
            background-color: var(--bg-light) !important;
        }

        .box-header .with-border{
            /*border: none !important;*/
        }

        .main-footer{
            background: var(--secondary);
            color: #e3dfdf;
            border: none;
        }

        .box,.modal-content,.box-footer {
            background-color: var(--bg-dark) !important;
            color: #e3dfdf;
        }

        .box-footer {
            border-top: none;
            background-color: var(--secondary) !important;
            color: #e3dfdf;
        }

        .active, h1, .box-title{
            color: #e3dfdf !important;
        }

        .breadcrumb a {
            color: #0f7ece !important;
        }

        input[type="text"],input[type="number"],input[type="select"],.form-control{
            background: rgba(0,0,0,.3);
            border-radius: 8px;
            height: 40px !important;
            align-items: center;
            align-content: center;
            border-color: #3a3939;
        }

        input[readonly]{
            background: rgba(255,255,255,.1) !important;

        }

        .pagination > li > a{
            background: var(--secondary) !important;
            border-color: var(--secondary) !important;
            color: white !important;
        }

        .tampil-terbilang{
            background-color: #232531;
        }

        table{
            color: #e3dfdf;
        }

        .modal-header{
            border-bottom-color: var(--bg-light);
        }
        .modal-footer{
            border-top-color: var(--bg-light);
        }

        .close{
            background: var(--primary) !important;
            padding: 5px 10px !important;
            border-radius: 50%;
            opacity: .7;
            color: #e3dfdf;
        }

        .table > tbody > tr > td,.table > thead > tr > th,.table > thead > tr > td{
            border-top: 1px solid var(--bg-light) !important;
        }

        .table > thead > tr > th{
            border: none;
        }

        .box-header.with-border{
            border-bottom: 2px solid var(--bg-light);
        }

        .box{
            border-top: 2px solid var(--secondary);
            border-radius: 10px;
        }

        .table-bordered, .table-bordered > tbody > tr > td{
            border: 1px solid var(--bg-light);
        }

        .table-striped > tbody > tr:nth-of-type(2n+1){
            background-color: transparent;
        }

        .small-box{
            border-radius: 10px;
            padding: 10px;
        }

    </style>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

        @includeIf('layouts.header')

        @includeIf('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                </h1>
                <ol class="breadcrumb">
                    @section('breadcrumb')
                        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @show
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @includeIf('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('AdminLTE-2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Moment -->
    <script src="{{ asset('AdminLTE-2/bower_components/moment/min/moment.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('AdminLTE-2/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-2/dist/js/adminlte.min.js') }}"></script>
    <!-- Validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>

    <script>
        function preview(selector, temporaryFile, width = 200)  {
            $(selector).empty();
            $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
        }
    </script>
    @stack('scripts')
</body>
</html>
