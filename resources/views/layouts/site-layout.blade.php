<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
	{{-- Title and Icon --}}
	<title>{{$title}}</title>
	<link rel="icon" type="image/x-icon" href="{{asset('imgs/bankospace_logo.svg')}}">
	
	{{-- Default Meta Tags --}}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="380">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<meta name="description" content="Welcome to Banko.Space. Future banking now."/>
	<meta name="keywords" content="Valeri Sabev, Valeri, Sabev, Valchy, banko.space, digital banking"/>
	<meta name="author" content="Valeri Sabev"/>

	{{-- Social media integration when sharing --}}
	<meta property="og:title" content="Banko.Space - Future banking now!"/>
	<meta property="og:image" content="https://valerisabev.com/imgs/bankospace_logo.svg"/>
	<meta property="og:image:alt" content="Banko.Space logo">
	<meta property="og:description" content="Welcome to Banko.Space. Future banking now."/>
	<meta name="twitter:title" content="Banko.Space | Future banking now."/>
	<meta name="twitter:image" content="https://valerisabev.com/imgs/bankospace_logo.svg"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@ValchyGaming"/>
	<meta name="twitter:description" content="Welcome to Banko.Space. Future banking now.">

	{{-- CSS Files --}}
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css?'.rand(1,1000))}}">
	@livewireStyles
</head>
<body>
	{{-- Page Header --}}
	<header>
		@include('components.header.header-layout')
	</header>

	{{-- Page Content --}}
	<section class="section-body">
		<center class="my-10">
			{{$slot}}
		</center>
	</section>

	{{-- Page Footer --}}
	<footer>
		@include('components.footer.footer-layout')
	</footer>

	{{-- JS Files --}}
    <script src="{{asset('js/header.js')}}"></script>
	@livewireScripts
</body>
</html>