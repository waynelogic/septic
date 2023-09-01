<div itemscope itemtype="http://schema.org/Service" class="group flex flex-col items-center justify-center text-center bg-white border shadow-round rounded-3xl p-8 transition-all hover:shadow-md hover:-translate-y-0.5">
    @include('ui.image', [
        'alt' => $obService->title,
        'css' => 'rounded-full border-2 border-primary shadow-md mb-6 transition-all group-hover:border-8',
        'image' => $obService->image,
         'w' => 150, 'h' => 150
    ])
    <h4 class="text-xl font-semibold" itemprop="name">{{ $obService->title }}</h4>
    <p class="mb-3" itemprop="description">{{ $obService->description }}</p>
    <p class="mb-4"><span class="text-primary font-semibold">Время работы:</span> {{ $obService->time }}</p>

    <a href="#callBackForm" onclick="document.getElementById('form-service').value = '{{ $obService->title }}'" class="btn btn-default rounded-full text-xl w-full mt-auto">
        <span class="mr-2">от {{ $obService->price }} руб.</span>
    </a>
</div>
