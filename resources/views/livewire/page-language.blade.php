<div class="flex align-center my-5 mx-3">
    <span wire:click="changePageLanguage('en')" class="cursor-pointer {{app()->getLocale() == 'en' ? 'font-semibold' : ''}}">EN</span>
    <span class="mx-2">/</span>
    <span wire:click="changePageLanguage('bg')" class="cursor-pointer {{app()->getLocale() == 'bg' ? 'font-semibold' : ''}}">БГ</span>
</div>
