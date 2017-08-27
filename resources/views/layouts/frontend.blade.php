@include('partial.frontend-header')

<body class="front_page">
<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->
<div class="body">
	<div class="wide_layout">
		@include('partial.frontend-menu')
		<div class="right_col" role="main">
			@yield('content')
		</div>
	@include('partial.frontend-footer')
	</div><!--/ [layout]-->
{{--@include('partial.frontend-social_feeds')--}}
</div>
<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->
@include('partial.frontend-script')
</body>
</html>


