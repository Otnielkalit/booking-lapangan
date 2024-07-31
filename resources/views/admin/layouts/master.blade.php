<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <base href="/public">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets-admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets-admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="assets-admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets-admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="assets-admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets-admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets-admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets-admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets-admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-widget widget-user shadow">
                                <div class="widget-user-header bg-info">
                                    <h3 class="">Halo, {{ Auth::user()->name }} Selamat Datang</h3>
                                    <h5 class="widget-user-desc">{{ Auth::user()->name }}</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="assets-admin/dist/img/user1-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3>150</h3>
                                                    <p>New Orders</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-bag"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>
                                                        53
                                                        <sup style="font-size: 20px">%</sup>
                                                    </h3>
                                                    <p>Bounce Rate</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-stats-bars"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3>44</h3>
                                                    <p>User Registrations</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-person-add"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-danger">
                                                <div class="inner">
                                                    <h3>65</h3>
                                                    <p>Unique Visitors</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-pie-graph"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>
                Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>
                .
            </strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b>
                3.2.0
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="assets-admin/plugins/jquery/jquery.min.js"></script>
    <script src="assets-admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-admin/plugins/chart.js/Chart.min.js"></script>
    <script src="assets-admin/plugins/sparklines/sparkline.js"></script>
    <script src="assets-admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets-admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="assets-admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="assets-admin/plugins/moment/moment.min.js"></script>
    <script src="assets-admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets-admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="assets-admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="assets-admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets-admin/dist/js/adminlte.js"></script>
    <script src="assets-admin/dist/js/demo.js"></script>
    <script src="assets-admin/dist/js/pages/dashboard.js"></script>
</body>

</html>
