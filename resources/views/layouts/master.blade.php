<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.js') }}">
	<link href="assets/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    
    
    
  </head>
  <body>
    @include('partials.navbar')
	
	<div class="container">
		@yield('content')
	</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>