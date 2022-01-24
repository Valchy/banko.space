<!DOCTYPE html>
<html lang="en">
<head>
	{{-- Meta Data --}}
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>

	{{-- CSS Files --}}
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	@livewireStyles
</head>
<body>
	{{-- Page Header --}}
	<header>
		@include('components.header')
	</header>

	{{-- Page Content --}}
	<section class="section-body">
		{{__('test')}}
		{{$slot}}
	</section>

	{{-- Page Footer --}}
	<footer>
		@include('components.footer')
	</footer>

	{{-- JS Files --}}
    <script src="{{asset('js/header.js')}}"></script>
	@livewireScripts
</body>
</html>