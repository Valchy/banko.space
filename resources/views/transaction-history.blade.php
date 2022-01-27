<x-site-layout title="Banko.Space">
	<center>
		<div class="my-10">
			<h1 class="pb-3 text-2xl font-black">{{__('Transactions')}}</h1>
			<livewire:transaction-search/>
		</div>

		<x-transaction-table :transactions="$transactions"/>
		{{$transactions->links()}}
	</center>
</x-site-layout>