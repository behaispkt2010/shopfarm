@include('partial.frontend-header')
<body class="front_page">
<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->
<div class="wide_layout">
@include('partial.frontend-menu')
@yield('content')
@include('partial.frontend-footer')
</div><!--/ [layout]-->
@include('partial.frontend-social_feeds')

<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->
@include('partial.frontend-script')
</body>
</html>


