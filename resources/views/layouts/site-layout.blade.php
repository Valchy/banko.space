<!DOCTYPE html>
<html lang="en">
<head>
	{{-- Meta Data --}}
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>

	{{-- JS Files --}}
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('js/header.js')}}"></script>
</head>
<body>
	{{-- Page Header --}}
	<header>
		@include('components.header')
	</header>

	{{-- Page Content --}}
	<section>
		{{$slot}}
	</section>

	{{-- Page Footer --}}
	<footer>
		@include('components.footer')
	</footer>
</body>
</html>