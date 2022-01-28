@if (count($transactions) != 0)
    <table>
        <thead>
            <tr>
                <th class="text-center">{{__('Sender')}}</th>
                <th class="text-center">{{__('Recipient')}}</th>
                <th class="text-center">{{__('Amount')}}</th>
                <th class="text-center">{{__('Date')}}</th>
                <th class="text-center">{{__('Status')}}</th>
            </tr>
        </thead>
        @foreach ($transactions as $transaction)
            <tr>
                <td class="text-center py-2 px-6">{{$transaction->accountFrom->username}}</td>
                <td class="text-center py-2 px-6">{{$transaction->accountTo->username}}</td>
                <td class="text-center py-2 px-6">${{$transaction->amount}}</td>
                <td class="text-center py-2 px-6">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $transaction->created_at)->format('d/m/y - H:i')}}</td>
                <td class="text-center py-2 px-6">{{__($transaction->status)}}</td>
            </tr>
        @endforeach
    </table>
    {{$transactions->links()}}
@else
    <span class="block"> {{__('No Transactions Yet')}} </span>
@endif