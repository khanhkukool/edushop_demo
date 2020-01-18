<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}"/>
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}"/>
    <!-- Font Awesome Icon -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/category-menu.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{ asset('assets/img/logo.png') }}" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="post" action="{{ url('register/create') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" id="login" class="fadeIn" name="username" placeholder="Username">
            <input type="password" id="login" class="fadeIn" name="password" placeholder="Password">
            <input type="password" id="login" class="fadeIn" name="re_password" placeholder="Nhập lại password">
            <input type="email" id="login" class="fadeIn" name="email" placeholder="Email">
            <input type="text" id="login" class="fadeIn" name="first_name" placeholder="First_name">
            <input type="text" id="login" class="fadeIn" name="last_name" placeholder="Last_name">
            <input type="text" id="login" class="fadeIn" name="address" placeholder="Địa chỉ">
            <input type="submit" class="fadeIn" name="register" value="Đăng ký">
        </form>


        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Quay lại đăng nhập</a>
        </div>

    </div>
</div>
</body>
</html>
