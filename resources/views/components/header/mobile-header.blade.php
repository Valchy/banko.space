<nav>
    <div class="py-6 px-6 w-full flex xl:hidden justify-between items-center bg-white">
        <a href="/" tabindex="0" class="flex items-center focus:outline-none w-24">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg2.svg" alt="logo"/>
            <p tabindex="0" class="focus:outline-none text-base text-gray-800 ml-3">Banko.Space</p>
        </a>
        <div>
            <button id="menu" aria-label="open menu" class="focus:outline-none rounded-md focus:ring-2 focus:ring-gray-700 text-gray-800" onclick="sidebarHandler(true)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg3.svg" alt="menu"/>
            </button>
        </div>
    </div>

    <!-- Mobile responsive sidebar (upon burger icon click) -->
    <div class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden top-0" id="mobile-nav">
        <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
        <div class="w-64 z-40 fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
            <div class="px-6 h-full">
                <div class="flex flex-col justify-between h-full w-full">
                    <div>
                        <div class="mt-6 flex w-full items-center justify-between">
                            <div class="flex items-center justify-between w-full">
                                <a href="/" class="flex items-center">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg2.svg" alt="logo"/>
                                    <p tabindex="0" class="focus:outline-none text-base text-gray-800 ml-3">Banko.Space</p>
                                </a>
                                <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                    <img class="icon icon-tabler icon-tabler-x" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg4.svg" alt="cross"/>
                                </button>
                            </div>
                        </div>
                        <ul class="f-m-m">
                            <li>
                                <a href="{{route('dashboard')}}" class="cursor-pointer">
                                    <div class="text-gray-800 pt-8">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8 text-indigo-700">
                                                <img class="icon icon-tabler icon-tabler-grid" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg5.svg" alt="dashboard"/>
                                            </div>
                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-indigo-700 xl:text-base text-base ml-3">{{__('Dashboard')}}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/transaction-history" class="cursor-pointer">
                                    <div class="text-gray-800 pt-8">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                <img class="icon icon-tabler icon-tabler-compass" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg7.svg" alt="transaction history"/>
                                            </div>
                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base text-base ml-3">{{__('Transaction History')}}</p>
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
                                                    <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                        <img class="icon icon-tabler icon-tabler-puzzle" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg6.svg" alt="admin"/>
                                                    </div>
                                                    <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base text-base ml-3">{{__('Admin')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="w-full pt-4">
                        <div class="border-t border-gray-300">
                            <div class="w-full flex items-center justify-between pt-1">
                                <div class="flex items-center">
                                    <img alt="profile-pic" src="{{asset('imgs/me.jpg')}}" tabindex="0" class="focus:outline-none w-8 h-8 rounded-md"/>
                                    <p class="text-gray-800 text-base leading-4 ml-2">Valeri Sabev</p>
                                </div>
                                <ul class="flex">
                                    <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                        <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                            <img class="icon icon-tabler icon-tabler-bell" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg11.svg" alt="bell"/>
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