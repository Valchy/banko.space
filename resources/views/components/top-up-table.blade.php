@if ($topUps)
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        @foreach ($topUps as $topUp)
            <tr>
                <td class="py-2 px-6">{{$topUp->created_at}}</td>
                <td class="py-2 px-6">{{$topUp->amount}}</td>
            </tr>
        @endforeach
    </table>
@else
    <span> No Top Ups Yet </span>
@endif