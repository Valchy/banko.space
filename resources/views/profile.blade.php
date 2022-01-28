<x-site-layout>
    <img class="w-64 rounded-full" src="{{auth()->user()->getMedia('pics')->last()?->getUrl()}}" alt="profile picture">
    <h1 class="m-10 text-2xl font-black">{{auth()->user()->name}}</h1>

    <form action="/image-upload" method="POST" enctype="multipart/form-data" class="flex items-center justify-center">
        <x-honeypot/>
        @csrf
        
        <input type="file" name="profile-pic"/>
        <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mx-1">Upload</button>
    </form>

    <form id="updateAccountForm" method="POST" action="{{route('profile-update')}}">
        <x-honeypot/>
        @csrf

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
    </form>

    <form id="deleteAccountForm" class="block mt-5" method="POST" action="{{route('profile-delete')}}">
        <x-honeypot/>
        @csrf
        <a onclick="if (confirm('Are you sure you want to delete your account?')) document.getElementById('deleteAccountForm').submit();" class="hover:text-red-500 cursor-pointer">
            Delete Account
        </a>
    </form>

    <x-button onclick="document.getElementById('updateAccountForm').submit();" class="mt-8">
        {{ __('Update Information') }}
    </x-button>

    <x-flash-message/>
</x-site-layout>