<x-site-layout title="Banko.Space">
	<center>
		{{-- {{__('Account Balance')}}: {{auth()->user()->account->username}} --}}
		<h2>{{__('Welcome back')}}, {{auth()->user()->account->username}}</h2>

		<div>
			<span>{{__('Account Balance')}}: </span>
			<b>50.00 Valchy Coins</b>
		</div>
		
		<h3>{{__('Your Transactions')}}</h3>
		<x-transaction-table :transactions="$transactions"/>

		<h3>{{__('Your Top-ups')}}</h3>
		<x-top-up-table :topUps="$topUps"/>
	</center>
</x-site-layout>
