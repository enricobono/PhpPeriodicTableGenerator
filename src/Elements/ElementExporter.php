<?php

namespace PeriodicTable\Elements;

use Intervention\Image\AbstractFont;
use Intervention\Image\AbstractShape;
use Intervention\Image\ImageManager;

class ElementExporter
{


    /** @var ImageManager */
    private $imageManager;

    private const MARGIN = 20;

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

        $image->rectangle(self::MARGIN,
            self::MARGIN, self::IMAGE_DIMENSION - self::MARGIN, self::IMAGE_DIMENSION - self::MARGIN, function (AbstractShape $draw) {
            $draw->border(2, '#000');
        });

        $image->text($element->getSymbol(), self::MARGIN, 400, function (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(400);
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
