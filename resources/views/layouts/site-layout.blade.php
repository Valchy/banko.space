<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title ?? 'My App'}}</title>

	<script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('js/header.js')}}"></script>
</head>
<body>
	<header>
		@include('components.header')
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		@include('components.footer')
	</footer>
</body>
</html>