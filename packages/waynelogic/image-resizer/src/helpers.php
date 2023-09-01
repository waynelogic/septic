<?php

declare(strict_types=1);

use Waynelogic\ImageResizer\Image;

if (! function_exists('image')) {
    function image(mixed $image, $width = null, $height = null, $options = []): string {
        return Image::resize($image, $width, $height, $options);
    }
}
