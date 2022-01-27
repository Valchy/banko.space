<x-site-layout title="Banko.Space">
	<center class="my-10">
		<div class="mb-10">
			<h1 class="pb-3 text-2xl font-black">{{__('All Transactions')}}</h1>
			<livewire:transaction-search/>
		</div>

		<x-transaction-table :transactions="$transactions"/>
	</center>
</x-site-layout>