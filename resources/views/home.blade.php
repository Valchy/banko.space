<x-site-layout title="Banko.Space">
	<div style="margin-top: -2.5rem"></div>
	<img style="max-width: 1500px" class="w-full" src="{{asset('/imgs/bankospace_landing_page.jpg')}}"/>
	<h1 class="mt-20 text-2xl font-bold">{{__('About Us')}}</h1>
	<p class="max-w-screen-sm mt-4 text-left px-6">
		{!! __('about.text') !!}
		<br/>
		<br/>
		<b class="font-semibold">
			{!! __('about.promotion') !!}
		</b>
	</p>
</x-site-layout>