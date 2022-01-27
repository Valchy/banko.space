<x-site-layout>
    <img class="w-64 rounded-full" src="{{asset('imgs/me.jpg')}}" alt="profile picture"/>
    <h1 class="m-10 text-2xl font-black">{{auth()->user()->name}}</h1>

    <form method="UPDATE" action="/profile-update">
        @csrf
        <x-honeypot/>

        <!-- Username -->
        <div class="mt-4">
            <x-label for="username" :value="__('Username')" />
            <x-input value="{{auth()->user()->account->username}}" id="username" class="text-center block mt-1 w-80" type="text" name="username" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />
            <x-input value="{{auth()->user()->email}}" id="email" class="text-center block mt-1 w-80" type="email" name="email" required />
        </div>

        <x-button class="mt-8">
            {{ __('Update Information') }}
        </x-button>
    </form>
</x-site-layout>