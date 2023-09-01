<div class="info-line sticky top-0 z-50 shadow">
    <div class="bg-primary text-white font-semibold">
        <div class="container py-3">
            <div class="flex max-sm:flex-col items-center justify-between">
                <div class="flex items-center">
                    <ul class="flex max-md:flex-col space-x-3">
                        <li class="max-lg:hidden">Срочный вызов</li>
                        <li class="pr-3 md:border-r">
                            <a class="flex items-center" href="tel:@phone($page->data->phone)">
                                <x-heroicon-o-device-phone-mobile class="w-6 h-6"/>
                                <span class="ml-3">{{ $page->data->phone }}</span>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-clock class="w-6 h-6"/>
                            <span class="ml-3">{{ $page->data->schedule }}</span>
                        </li>
                    </ul>
                </div>
                <a class="flex items-center" href="mailto:{{ $page->data->email }}">
                    <x-heroicon-o-envelope-open class="w-6 h-6"/>
                    <span class="ml-3">{{ $page->data->email }}</span>
                </a>
            </div>
        </div>
    </div>
</div>
