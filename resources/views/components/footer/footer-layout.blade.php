<div class="bg-linear-pink-invert p-12 pt-3 lg:pt-12">
    <div tabindex="0" aria-label="footer" class="focus:outline-none mx-auto container flex flex-col items-center justify-center">
        <div class="text-black flex flex-col md:items-center f-f-l pt-3">
            <div class="my-6 text-base text-color f-f-l"> 
                <ul class="md:flex items-center">
                    <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/dashboard" class="focus:outline-none focus:underline hover:text-gray-500">{{__('Dashboard')}} </a></li>
                    <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/transaction-history" class="focus:outline-none focus:underline hover:text-gray-500">{{__('Transaction History')}} </a></li>
                    <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/download" class="focus:outline-none focus:underline hover:text-gray-500">{{__('Download Now')}} </a></li>
                </ul>
            </div>
            <div class="text-sm text-color mb-10 f-f-l">
                <p tabindex="0" class="focus:outline-none">© 2022 Banko.Space. {{__('All rights reserved')}}</p>
            </div>
        </div>
        <div class="w-9/12 h-0.5 bg-gray-100 rounded-full"></div>
        <div class="flex justify-between items-center pt-12">
            <x-footer.download-btn src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg2.svg" alt="download on the app store"/>
            <x-footer.download-btn src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg3.svg" alt="get it on google play"/>
        </div>
    </div>
</div>