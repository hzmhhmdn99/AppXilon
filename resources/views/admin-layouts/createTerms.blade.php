<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Terms of Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset ('admin-assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin-assets/css/suneditor.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin-assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/suneditor.js')}}"></script>
</head>
<!-- preloader area start -->

<!-- preloader area end -->
<body>

<!-- page container area start -->
<div class="page-container">

    <!-- sidebar menu area start -->
    @include("admin-include.sidebar") <!-- sidebar menu -->
        <!-- main content area start -->
        <div class="main-content">
            @include('admin-include.header')
        <!-- header area end -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Dashboard</h4>
                    </div>
                </div>
                @include("admin-include.adminbar")
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('term.store') }}" method="POST">
                                        @csrf
                                        <h4 class="header-title">Add Term</h4>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>Terms Id:</label>
                                                <input type="number" class="form-control" placeholder="Eg: 1,2,3" name="T_Id" Required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>Term's Topic:</label>
                                                <input type="text" class="form-control" placeholder="Eg: SECTION 1 - ONLINE RESTAURANT TERMS" name="T_Topics" Required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label>Term's Content:</label>
                                                <input type="text" class="form-control" placeholder="" name="T_Terms" Required>
                                            </div>
                                        </div>
                                        <button type="submit" style="float: right; margin-right: 10px"
                                            class="btn btn-success mb-3" name="upload">Add</button>
                                        <a class="btn btn-danger" style="float: right; margin-right: 10px"
                                            href="{{ route('term.index') }}">Back</a>
                                    </form>
                                </div>
                        </div>
                        <!-- Textual inputs end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->
</div>
<script src="{{asset('admin-assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('admin-assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin-assets/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin-assets/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin-assets/js/jquery.slicknav.min.js')}}"></script>

<!-- others plugins -->
<script src="{{asset('admin-assets/js/plugins.js')}}"></script>
<script src="{{asset('admin-assets/js/scripts.js')}}"></script>
</body>
</html>
<!-- page container area end -->
