@if ($transactions)
    <table>
        <thead>
            <tr>
                <th>{{__('Sender')}}</th>
                <th>{{__('Recipient')}}</th>
                <th>{{__('Amount')}}</th>
                <th>{{__('Date')}}</th>
                <th>{{__('Status')}}</th>
                {{-- <th>Sent Date</th>
                <th>Approved Date</th> --}}
            </tr>
        </thead>
        @foreach ($transactions as $transaction)
            <tr>
                <td class="text-center py-2 px-6">{{$transaction->accountFrom->username}}</td>
                <td class="text-center py-2 px-6">{{$transaction->accountTo->username}}</td>
                <td class="text-center py-2 px-6">${{$transaction->amount}}</td>
                <td class="text-center py-2 px-6">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $transaction->created_at)->format('d/m/y - H:i')}}</td>
                <td class="text-center py-2 px-6">{{__($transaction->status)}}</td>
                {{-- <td class="py-2 px-6">{{\Carbon\Carbon::createFromFormat('H:i:s', $transaction->created_at)->format('h:i')}}</td> --}}
                {{-- <td class="py-2 px-6">{{$transaction->created_at == $transaction->updated_at ? '-' : $transaction->updated_at}}</td> --}}
            </tr>
        @endforeach
    </table>
@else
    <span> {{__('No Transactions Yet')}} </span>
@endif