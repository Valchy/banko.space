<x-site-layout title="Banko.Space">
	<center>
		<h1 class="pb-3 text-2xl font-black">Transactions</h1>
		<livewire:transaction-search/>

		<br/>
		<br/>

		<x-transaction-table :transactions="$transactions"/>
		{{$transactions->links()}}
	</center>
</x-site-layout>