<!DOCTYPE html>
<!--
autho:trieucse
description: template admin
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('frontend/images/logo.png')}}'/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    @include('partial.styles')
    <script>
        @yield('add_styles')
    </script>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('partial.menu')
                <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>@yield('pageHeader')
                            <small> @yield('detailHeader')</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            @yield('content')
        </div>
        @include('partial.footer')
    </div>
</div>
@include('partial.scripts')
@yield('add_scripts')
</body>
</html>