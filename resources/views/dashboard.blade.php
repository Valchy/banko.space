<x-site-layout title="Banko.Space">
	<div class="flex flex-col justify-center">
		{{-- {{__('Account Balance')}}: {{auth()->user()->account->username}} --}}
		<h2>Welcome back, {{auth()->user()->account->username}}</h2>

		<div>
			<span>Account Balance: </span>
			<b>50.00 Valchy Coins</b>
		</div>
		
		<h3>Your Transactions</h3>
		<x-transaction-table :transactions="$transactions"/>

		<h3>Your Top Ups</h3>
		<x-top-up-table :topUps="$topUps"/>
	</div>
</x-site-layout>
