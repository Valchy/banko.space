<x-site-layout title="Banko.Space">
	<center>
		<br/>
		<br/>
		<span>Welcome to the bank of the future.</span>
		<br/>
		<br/>
		<br/>

		<h1 class="pb-3 text-2xl font-black">Transactions</h1>
		<livewire:transaction-search/>

		<x-transaction-table :transactions="$transactions"/>
		{{$transactions->links()}}
	</center>
</x-site-layout>