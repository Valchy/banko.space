<nav>
    <div class="py-6 px-6 w-full flex xl:hidden justify-between items-center bg-white">
        <a href="/" tabindex="0" class="flex items-center focus:outline-none w-24">
            <img src="{{asset('imgs/bankospace_logo.svg')}}" alt="logo"/>
            <p tabindex="0" class="focus:outline-none text-base text-gray-800 ml-3">Banko.Space</p>
        </a>
        <div>
            <button id="menu" aria-label="open menu" class="focus:outline-none rounded-md focus:ring-2 focus:ring-gray-700 text-gray-800" onclick="sidebarHandler(true)">
                <img src="{{asset('imgs/burger_menu.svg')}}" alt="menu"/>
            </button>
        </div>
    </div>

    <!-- Mobile responsive sidebar (upon burger icon click) -->
    <div class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden top-0" id="mobile-nav">
        <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
        <div class="w-80 z-40 fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
            <div class="px-6 h-full">
                <div class="flex flex-col justify-between h-full w-full">
                    <div>
                        <div class="mt-6 flex w-full items-center justify-between">
                            <div class="flex items-center justify-between w-full">
                                <a href="/" class="flex items-center">
                                    <img src="{{asset('imgs/bankospace_logo.svg')}}" alt="logo"/>
                                    <p tabindex="0" class="focus:outline-none text-base text-gray-800 ml-3">Banko.Space</p>
                                </a>
                                <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                    <img class="icon icon-tabler icon-tabler-x" src="{{asset('imgs/cross.svg')}}" alt="cross"/>
                                </button>
                            </div>
                        </div>
                        <ul class="f-m-m">
                            <li>
                                <a href="/dashboard" class="cursor-pointer">
                                    <div class="text-gray-800 pt-8">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <img class="icon icon-tabler icon-tabler-grid" src="{{asset('imgs/dashboard.svg')}}" alt="dashboard"/>
                                            </div>
                                            <p tabindex="0" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'dashboard' ? 'text-indigo-700 border-indigo-700' : 'text-gray-800'}} xl:text-base text-base ml-3">{{__('Dashboard')}}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/transaction-history" class="cursor-pointer">
                                    <div class="text-gray-800 pt-8">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <img class="icon icon-tabler icon-tabler-compass" src="{{asset('imgs/history.svg')}}" alt="transaction history"/>
                                            </div>
                                            <p tabindex="0" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'transaction-history' ? 'text-indigo-700 border-indigo-700' : 'text-gray-800'}} xl:text-base text-base ml-3">{{__('Transaction History')}}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @auth
                                <li>
                                    <a href="/admin" class="cursor-pointer">
                                        <div class="text-gray-800 pt-8">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-6 h-6 md:w-8 md:h-8">
                                                        <img class="icon icon-tabler icon-tabler-puzzle" src="{{asset('imgs/admin.svg')}}" alt="admin"/>
                                                    </div>
                                                    <p tabindex="0" class="focus:outline-none border-b-2 border-transparent {{request()->path() == 'admin' ? 'text-indigo-700 border-indigo-700' : 'text-gray-800'}} xl:text-base text-base ml-3">{{__('Admin')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="w-full pt-4">
                        <ul>
                            @if (auth()->check())
                                <li class="mt-12 cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                    <a href="/profile" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <circle cx="12" cy="7" r="4"/>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                        </svg>
                                        <span class="ml-2">{{__('My Profile')}}</span>
                                    </a>
                                </li>
                                <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                    <a href="/settings" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
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
                                <li class="mt-12 cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
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
                        <livewire:page-language/>
                        <div class="border-t border-gray-300">
                            <div class="w-full flex items-center justify-between pt-1">
                                <div class="flex items-center">
                                    <img alt="profile-pic" src="{{asset('imgs/me.jpg')}}" tabindex="0" class="focus:outline-none w-8 h-8 rounded-md"/>
                                    <p class="text-gray-800 text-base leading-4 ml-2">Valeri Sabev</p>
                                </div>
                                <ul class="flex">
                                    <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                        <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                            <img class="icon icon-tabler icon-tabler-bell" src="{{asset('imgs/bell.svg')}}" alt="bell"/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>