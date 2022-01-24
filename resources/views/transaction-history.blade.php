<x-site-layout title="Banko.Space">
	<center>
		<br/>
		<br/>
		<span>Welcome to the bank of the future.</span>
		<br/>
		<br/>
		<br/>

		<h1 class="pb-3 text-2xl font-black">Transactions</h1>
		<table>
			<thead>
				<tr>
					<th>From</th>
					<th>To</th>
					<th>Amount</th>
				</tr>
			</thead>
			@foreach ($transactions as $transaction)
				<tr>
					<td class="py-2 px-6">{{$transaction->accountFrom->user->name}}</td>
					<td class="py-2 px-6">{{$transaction->accountTo->user->name}}</td>
					<td class="py-2 px-6">${{$transaction->amount}}</td>
				</tr>
			@endforeach
		</table>
		{{$transactions->links()}}
	</center>
</x-site-layout>