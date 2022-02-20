<x-site-layout>
    <h1 class="text-2xl font-black">{{__('Send Money')}}</h1>
    <span class="block">{{__('Available Balance: ')}}${{auth()->user()->account->account_balance}}

    <form class="mt-10" method="POST" action="{{route('send-money-now')}}">
        <x-honeypot/>
        @csrf

        <select name="account_to" class="mt-4">
            @foreach ($accounts as $account)
                <option value="{{$account->id}}">{{$account->username}}</option>
            @endforeach
        </select>

        <div class="mt-4">
            <x-label for="amount" :value="__('Amount')"/>
            <x-input id="amount" class="text-center block mt-1 w-80" type="text" name="amount" placeholder="$10" required autofocus/>
        </div>

        <x-button class="mt-8">
            {{ __('Send Money') }}
        </x-button>

        <x-flash-message/>
    </form>
</x-site-layout>>
