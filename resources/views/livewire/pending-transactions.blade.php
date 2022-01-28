@if (count($transactions) != 0)
    <table>
        <thead>
            <tr>
                <th>{{__('Sender')}}</th>
                <th>{{__('Recipient')}}</th>
                <th>{{__('Amount')}}</th>
                <th>{{__('Date')}}</th>
                <th>{{__('Options')}}</th>
            </tr>
        </thead>
        @foreach ($transactions as $transaction)
            <tr>
                <td class="text-center py-2 px-6">{{$transaction->accountFrom->username}}</td>
                <td class="text-center py-2 px-6">{{$transaction->accountTo->username}}</td>
                <td class="text-center py-2 px-6">${{$transaction->amount}}</td>
                <td class="text-center py-2 px-6">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $transaction->created_at)->format('d/m/y - H:i')}}</td>
                <td class="text-center py-2 px-6">
                    <button wire:click="modifyTransaction({{$transaction->id}}, 1)" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mx-1">{{__('Approve')}}</button>
                    <button wire:click="modifyTransaction({{$transaction->id}}, 0)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-1">{{__('Refuse')}}</button>
                </td>
            </tr>
        @endforeach
    </table>
    {{$transactions->links()}}
    <x-flash-message/>
@else
    <span> {{__('No Transactions Yet')}} </span>
@endif
