@if (count($topUps) != 0)
    <table>
        <thead>
            <tr>
                <th>{{__('Date')}}</th>
                <th>{{__('Amount')}}</th>
            </tr>
        </thead>
        @foreach ($topUps as $topUp)
            <tr>
                <td class="py-2 px-6">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $topUp->created_at)->format('d/m/y - H:i')}}</td>
                <td class="py-2 px-6">${{$topUp->amount}}</td>
            </tr>
        @endforeach
    </table>
    {{$topUps->links()}}
@else
    <span> {{__('No Top-ups Yet')}} </span>
@endif