<?php

namespace PeriodicTable\Elements;

use Intervention\Image\AbstractFont;
use Intervention\Image\ImageManager;

class ElementExporter
{

    /** @var ImageManager */
    private $imageManager;


    private const IMAGE_DIMENSION = 1000;

    /**
     * ElementExporter constructor.
     *
     * @param ImageManager $imageManager
     */
    public function __construct(ImageManager $imageManager)
    {
        $this->imageManager = $imageManager;
    }

    public function export(Element $element)
    {
        $image = $this->imageManager->canvas(self::IMAGE_DIMENSION, self::IMAGE_DIMENSION);

        $image->text($element->getSymbol(), 10, 20, function (AbstractFont $font) {

            $font->file(3);
            //            $font->file('../../../fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(14);
//            $font->color('#000000');
//            $font->align('center');
//            $font->valign('top');
//            $font->angle(45);
        });


        $image->save(
            sprintf("export/%'.03d.png", $element->getAtomicNumber()),
            95,
            'png'
        );
    }
}
