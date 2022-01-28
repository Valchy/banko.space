<x-site-layout>
    <h1 class="mb-10 text-2xl font-black">{{__('Send Money')}}</h1>

    <form method="POST" action="{{route('send-money-now')}}">
        <x-honeypot/>
        @csrf

        <select name="account_to" class="mt-4">
            @foreach ($accounts as $account)
                <option value="{{$account->id}}">{{$account->username}}</option>
            @endforeach
        </select>

        <div class="mt-4">
            <x-label for="amount" :value="__('Amount')" />
            <x-input id="amount" class="text-center block mt-1 w-80" type="text" name="amount" required autofocus />
        </div>

        <x-button class="mt-8">
            {{ __('Send Money') }}
        </x-button>

        <x-flash-message/>
    </form>
</x-site-layout>>
