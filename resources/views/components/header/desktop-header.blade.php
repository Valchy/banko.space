<!-- Code block starts --> 
<nav class="w-full bg-white hidden xl:block shadow z-10 relative">
    <div class="container px-6 h-16 flex justify-between items-center lg:items-stretch mx-auto">
        <div class="flex items-center">
            <a href="{{route('home')}}" class="focus:outline-none focus:ring-2 focus:ring-offset-2 mr-10 flex items-center">
                <img src="{{asset('imgs/bankospace_logo_desktop.svg')}}" alt="logo"/>
                <h3 class="text-base text-gray-800 font-bold tracking-normal leading-tight mx-3 hidden lg:block">Banko.Space</h3>
            </a>
            <div class="hidden xl:flex items-center h-full">
                <a href="{{route('dashboard')}}" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'dashboard' ? 'border-indigo-700' : ''}} cursor-pointer h-full flex items-center text-sm text-gray-700 hover:text-indigo-700 focus:text-indigo-700 tracking-normal transition duration-150 ease-in-out">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <rect x="4" y="4" width="6" height="6" rx="1"/>
                            <rect x="14" y="4" width="6" height="6" rx="1"/>
                            <rect x="4" y="14" width="6" height="6" rx="1"/>
                            <rect x="14" y="14" width="6" height="6" rx="1"/>
                        </svg>
                    </span>
                    {{__('Dashboard')}}
                </a>
                <a href="{{route('transaction-history')}}" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'transaction-history' ? 'border-indigo-700' : ''}} cursor-pointer h-full flex items-center text-sm hover:text-indigo-700 text-gray-800 mx-10 tracking-normal transition duration-150 ease-in-out">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <polyline points="8 16 10 10 16 8 14 14 8 16"/>
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                    </span>
                    {{__('Transaction History')}}
                </a>
                @if (auth()->check() && auth()->user()->is_admin)
                    <a href="{{route('admin')}}" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'admin' ? 'border-indigo-700' : ''}} cursor-pointer h-full flex items-center text-sm hover:text-indigo-700 text-gray-800 mr-10 tracking-normal transition duration-150 ease-in-out">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>
                                <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"/>
                            </svg>
                        </span>
                        {{__('Admin')}}
                    </a>
                @endif
            </div>
        </div>
        <div class="h-full hidden xl:flex items-center justify-end">
            <div class="h-full flex">
                <x-page-language/>
                <button aria-label="open notifications" class="focus:outline-none focus:text-indigo-700 hover:text-indigo-700 w-20 h-full flex items-center justify-center border-l border-r border-gray-300 cursor-pointer text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
                    </svg>
                </button>
                <button aria-label="dropdown" class="focus:outline-none text-gray-800 border-b-2 flex items-center pl-8 relative cursor-pointer" onclick="dropdownHandler(this)">
                    <ul class="py-6 px-6 w-48 border-r bg-white absolute rounded left-0 shadow mt-16 top-0 hidden">
                        @if (auth()->check())
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="{{route('profile')}}" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                        <circle cx="12" cy="7" r="4"/>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                    </svg>
                                    <span class="ml-2">{{__('My Profile')}}</span>
                                </a>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <a href="{{route('settings')}}" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="ml-2">{{__('Settings')}}</span>
                                </a>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="{{url('/logout')}}" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                    <img width="16" src="{{asset('imgs/logout.png')}}"/>
                                    <span class="ml-2">{{__('Logout')}}</span>
                                </a>
                            </li>
                        @else
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="/login" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                    <img width="16" src="{{asset('imgs/login.png')}}"/>
                                    <span class="ml-2">{{__('Login')}}</span>
                                </a>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <a href="/register" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                    <img width="16" src="{{asset('imgs/register.png')}}"/>
                                    <span class="ml-2">{{__('Register')}}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                    @auth
                        <img class="rounded h-10 w-10 object-cover" src="{{auth()->user()->getMedia('pics')->last()->getUrl() ?? asset('imgs/user.png')}}" alt="profile-pic"/>
                    @endauth
                    <p class="text-sm ml-2">{{auth()->user()->name ?? __('Guest')}}</p>
                </button>
            </div>
        </div>
    </div>
</nav>