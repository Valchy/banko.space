<x-site-layout title="Banko.Space">
	<center class="my-10">
		<div class="mb-10">
			<h1 class="text-2xl font-black font-semibold">{{__('Welcome back')}}, <i class="font-bold">{{auth()->user()->account->username}}</i></h1>
			<span>Banking of the future is now in the palm of your hands!</span>
		</div>

		<div class="px-6 flex justify-between items-center max-w-screen-md text-left border-b-2 border-gray-700 pb-5">
			<span class="md:text-3xl">{{__('Account Balance')}}: <b class="md:text-3xl">${{auth()->user()->account->account_balance}}</b></span>
			<div class="mt-15 flex align-center justify-center">
				<a href="{{route('top-up-account')}}"><img class="cursor-pointer mx-5" width="55" src="{{asset('imgs/topup.png')}}" alt="topup icon"/></a>
				<a href="{{route('send-money')}}"><img class="cursor-pointer" width="55" src="{{asset('imgs/send_money.png')}}" alt="send money icon"/></a>
			</div>
		</div>
		
		<div class="px-6 block max-w-screen-md text-left pb-5">
			<h3 class="mt-10 md:text-2xl mb-2">{{__('Your Transactions')}}</h3>
			<x-transaction-table :transactions="$transactions"/>
		</div>
	</center>

	<x-flash-message/>
</x-site-layout>
