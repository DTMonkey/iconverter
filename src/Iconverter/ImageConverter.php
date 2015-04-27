<?php

namespace Iconverter;

class ImageConverter
{
    public function resizeImage($sourcePath, $destinationPath, $imageSize)
    {
        exec("gm convert $sourcePath -resize $imageSize +profile '*' $destinationPath");
    }

    public function resizeImageInset($sourcePath, $destinationPath, $canvasSize, $imageSize)
    {
        exec("gm convert $sourcePath -resize $imageSize -background transparent -gravity center -extent $canvasSize +profile '*' $destinationPath");
    }
}
