<picture class="{{ isset($css) ? $css : '' }}">
    <source media="(min-width: 768px)" srcset="{{ image($image, $w, $h, ['extension' => 'webp']) }}">
    <img class="absolute w-full h-full object-cover" src="{{ image($image, $mobile[0], $mobile[1], ['extension' => 'webp']) }}" width="{{ $w }}" height="{{ $h }}" alt="{{ isset($alt) ? $alt : '' }}">
</picture>
