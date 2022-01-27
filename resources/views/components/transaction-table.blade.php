@if ($transactions)
    <table>
        <thead>
            <tr>
                <th class="text-left">{{__('From')}}</th>
                <th class="text-left">{{__('To')}}</th>
                <th class="text-left">{{__('Status')}}</th>
                <th class="text-left">{{__('Amount')}}</th>
                {{-- <th>Sent Date</th>
                <th>Approved Date</th> --}}
            </tr>
        </thead>
        @foreach ($transactions as $transaction)
            <tr>
                <td class="py-2 px-6">{{$transaction->accountFrom->user->name}}</td>
                <td class="py-2 px-6">{{$transaction->accountTo->user->name}}</td>
                <td class="py-2 px-6">{{__($transaction->status)}}</td>
                <td class="py-2 px-6">${{$transaction->amount}}</td>
                {{-- <td class="py-2 px-6">{{\Carbon\Carbon::createFromFormat('H:i:s', $transaction->created_at)->format('h:i')}}</td> --}}
                {{-- <td class="py-2 px-6">{{$transaction->created_at == $transaction->updated_at ? '-' : $transaction->updated_at}}</td> --}}
            </tr>
        @endforeach
    </table>
@else
    <span> {{__('No Transactions Yet')}} </span>
@endif