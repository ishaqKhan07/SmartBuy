<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SmartBuy | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('seller/css/style.css')}}">
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url({{asset('seller/images/bg_1.jpg')}});">
                <div class="user-logo">
                    <div class="img" style="background-image: url({{asset('seller/images/logo.jpg')}});"></div>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                </li>
            </ul>
        </nav>
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>
    </div>
<script src="{{asset('seller/js/jquery.min.js')}}"></script>
<script src="{{asset('seller/js/popper.js')}}"></script>
<script src="{{asset('seller/js/bootstrap.min.js')}}"></script>
<script src="{{asset('seller/js/main.js')}}"></script>
@stack('custom-js-scripts')
</body>
</html>
