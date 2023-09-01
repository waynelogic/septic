<footer class="site-footer bg-primary/20 border-t border-[#222]/20">
    <div class="container py-6">
        <div class="flex flex-wrap items-center justify-between">
            <a href="#" class="flex items-center">
                <img class="mr-4" src="images/common/logo.svg" width="50px" alt="">
                <span class="font-bold text-xl">Сервис ЛОС <br> У Анатольевича</span>
            </a>
            <button class="font-semibold">
                Политика конфиденциальности
            </button>
            <div class="flex items-center space-x-4 my-3">
                <span class="font-semibold">Быстрая связь:</span>
                @foreach($page->data->social as $key => $value)
                    <a target="_blank" href="{{ $value }}" class="block">
                        <img src="images/social/{{ $key }}.svg" alt="{{ $key }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-primary text-white text-center py-2">
        <div class="container">
            <p class="max-sm:text-sm">Copyright © 2017 - {{  \Carbon\Carbon::now()->format('Y')  }}. Сайт сделан компанией <a class="transition-all hover:text-orange-400" href="https://albus-it.ru/">Альбус</a>. Все права защищены.</p>
        </div>
    </div>
</footer>
