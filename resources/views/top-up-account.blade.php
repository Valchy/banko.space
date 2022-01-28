<x-site-layout>
    <h1 class="mb-10 text-2xl font-black">{{__('Top-up Account')}}</h1>

    <form method="POST" action="{{route('top-up-account-now')}}">
        <x-honeypot/>
        @csrf

        <div class="mt-4">
            <x-label for="top_up_amount" :value="__('Amount')" />
            <x-input id="top_up_amount" class="text-center block mt-1 w-80" type="text" name="top_up_amount" required autofocus />
        </div>

        <x-button class="mt-8">
            {{ __('Top-up') }}
        </x-button>
    </form>
</x-site-layout>>
