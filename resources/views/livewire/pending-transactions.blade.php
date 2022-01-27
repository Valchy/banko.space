<center class="my-10">
    @if ($transactions)
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
                        <button class="btn mx-1">{{__('Approve')}}</button>
                        <button class="btn mx-1">{{__('Refuse')}}</button>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <span> {{__('No Transactions Yet')}} </span>
    @endif
</center>
