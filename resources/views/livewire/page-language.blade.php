<div class="flex align-center">
    <div wire:click="changePageLanguage('en')" class="cursor-pointer flex-flex-col justify-center align-center m-4">
        <img class="border-2 rounded-full {{app()->getLocale() == 'en' ? 'border-black' : ''}}" width="23" src="{{asset('imgs/en_flag.png')}}" alt="english flag">
        <span class="{{app()->getLocale() == 'en' ? 'font-semibold' : ''}}">EN</span>
    </div>
    <div wire:click="changePageLanguage('bg')" class="cursor-pointer flex-flex-col justify-center align-center m-4">
        <img class="border-2 rounded-full {{app()->getLocale() == 'bg' ? 'border-black' : ''}}" width="23" src="{{asset('imgs/bg_flag.png')}}" alt="bulgarian flag">
        <span class="{{app()->getLocale() == 'bg' ? 'font-semibold' : ''}}">BG</span>
    </div>
</div>
