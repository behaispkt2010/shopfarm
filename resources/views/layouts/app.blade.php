<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('partial.styles')
    <!-- Styles -->
    <script src="{{asset('plugin/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript">
        var baseURL="{!!url('/')!!}";
    </script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="app" style="height: 100%; width: 100%; display: table">

        <div class="middle" style="display: table-cell;vertical-align: middle;">
            {{--<div class="text-center">  <img src="{{url('/')}}/images/logo.png" alt="..." class="img-responsive text-center profile_img" style="margin: 0 auto"></div>--}}
            {{--<br>--}}
        @yield('content')
            <div class="h-end text-center">
                <label><span style="color: white">Sản phẩm của </span><span style="color: green">Nông sản tự nhiên</span></label>
            </div>
        </div>

    </div>

    @include('partial.scripts')

</body>
</html>
