<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
{{--    //cần đặt file jquery.min ở trên đầu để tránh bị lỗi tại các nơi sau nó gọi nó--}}
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <script type="text/javascript">
        //cấn set 1 biến để chứa đường dẫn chạy project, để ajax có thể hoạt động chính xác dựa vào url này
        var base_url = '{{ url('/') }}';
        // console.log(base_url);
    </script>
    <header class="main-header">
        <!-- Logo -->
        <a href="{{ asset('backend/index2.html') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('backend/assets/images/user2-160x160.jpg') }}" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs">Bùi Đức Khánh</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('backend/assets/images/user2-160x160.jpg') }}" class="img-circle"
                                     alt="User Image">

                                <p>
                                    Bùi Đức Khánh - Web Developer
                                    <small>Thành viên từ năm 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('backend/assets/images/user2-160x160.jpg') }}" class="img-circle"
                         alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Bùi Đức Khánh</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>
                <li>
                    <a href="{{ url('/backend/banners/index') }}">
                        <span>Quản lý banner</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                         </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/categories/index') }}">
                        <span>Quản lý thể loại</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/detail_categories/index') }}">
                        <span>Quản lý chi tiết thể loại</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/products/index') }}">
                        <span>Quản lý sản phẩm</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/users/index') }}">
                        <span>Quản lý thành viên</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/videos/index') }}">
                        <span>Quản lý video</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/bills/index') }}">
                        <span>Quản lý hóa đơn</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            {{--      form của e oki r đó, do e chưa hiển thị thông báo lỗi validate ra thôi
            trong laravel có 1 biến $errors sinh ra mặc đinh, chứa tất cả các thông báo lỗi khi validate
            --}}
            @php

           // print_r($errors);
            @endphp
{{--            e thêm khối div này để hiển thị lỗi nhé--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

@yield('content')
<!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13-pre
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/assets/js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src = "{{ asset('backend/assets/js/adminlte.min.js') }}" ></script>

<script src="{{ asset('backend/assets/ckeditor/ckeditor.js') }}"
        type="text/javascript">

</script>

<script type="text/javascript" src="{{ asset('backend/assets/js/script.js') }}">

</script>
</body>
</html>
