<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 5 ACL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css">
</head>
<body>

	@include('partials.nav')

	<div class="container">
		@include('partials.flash')
		
		@yield('content')
	
		<footer>
		<hr />
		Copyright
		</footer>
	</div>
	
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
	
	@yield('footer')
	
	
</body>
</html>
