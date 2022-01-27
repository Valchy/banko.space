@if ($transactions)
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
@else
    <span> No Transactions Yet </span>
@endif