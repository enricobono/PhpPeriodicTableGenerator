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

    private const FONT_SIZE = 100;

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

        $image->rectangle(
            self::MARGIN,
            self::MARGIN,
            self::IMAGE_DIMENSION - self::MARGIN,
            self::IMAGE_DIMENSION - self::MARGIN,
            function (AbstractShape $draw) {
                $draw->border(5, '#000');
            });

        $image->text($element->getSymbol(), self::MARGIN * 2, 400, function (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(400);
            $font->valign('top');
        });

        $image->text($element->getAtomicNumber(), self::MARGIN * 2, 300, function  (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('left');
            $font->valign('top');
        });

        $image->text($element->getName(), self::IMAGE_DIMENSION / 2, self::MARGIN * 2, function (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('center');
            $font->valign('top');
        });

        $image->text($element->getAtomicWeight(), self::MARGIN * 2, 680, function  (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('left');
            $font->valign('top');
        });

        $image->text($element->getHeatOfFusion(), self::IMAGE_DIMENSION - self::MARGIN * 2, 300, function  (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('right');
            $font->valign('top');
        });

        $image->text($element->getDensity(), self::IMAGE_DIMENSION - self::MARGIN * 2, 350, function  (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('right');
            $font->valign('top');
        });

        $image->text($element->getElectronegativity(), self::IMAGE_DIMENSION - self::MARGIN * 2, 400, function  (AbstractFont $font) {
            $font->file('fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf');
            $font->size(self::FONT_SIZE);
            $font->align('right');
            $font->valign('top');
        });


        $image->save(
            sprintf("export/%'.03d.png", $element->getAtomicNumber()),
            95,
            'png'
        );
    }
}
