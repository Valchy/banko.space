<center class="my-10">
    @if (count($transactions) != 0)
        <h1 class="mb-10 text-2xl font-black">{{__('Transactions with pending status')}}</h1>

        <table>
            <thead>
                <tr>
                    <th>{{__('From')}}</th>
                    <th>{{__('To')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Amount')}}</th>
                    <th>{{__('Options')}}</th>
                </tr>
            </thead>
            @foreach ($transactions as $transaction)
                <tr>
                    <td class="py-2 px-6">{{$transaction->accountFrom->user->name}}</td>
                    <td class="py-2 px-6">{{$transaction->accountTo->user->name}}</td>
                    <td class="py-2 px-6">{{$transaction->status}}</td>
                    <td class="py-2 px-6">${{$transaction->amount}}</td>
                    <td class="py-2 px-6">
                        <button wire:click="modifyTransaction({{$transaction->id}}, 1)" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mx-1">{{__('Approve')}}</button>
                        <button wire:click="modifyTransaction({{$transaction->id}}, 0)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-1">{{__('Refuse')}}</button>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <span> {{__('No Transactions Yet')}} </span>
    @endif
</center>
