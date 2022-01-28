<div class="flex align-center my-5 mx-3">
    <a href="{{route('locale', 'en')}}" class="cursor-pointer {{app()->getLocale() == 'en' ? 'font-semibold' : ''}}">EN</a>
    <span class="mx-2">/</span>
    <a href="{{route('locale', 'bg')}}" class="cursor-pointer {{app()->getLocale() == 'bg' ? 'font-semibold' : ''}}">БГ</a>
</div>
