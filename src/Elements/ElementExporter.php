<?php

namespace PeriodicTable\Elements;

use Intervention\Image\AbstractFont;
use Intervention\Image\AbstractShape;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;

class ElementExporter
{

    /** @var ImageManager */
    private $imageManager;

    private const MARGIN = 20;
    private const IMAGE_DIMENSION = 1000;

    private const FONT = 'fonts/Ubuntu_Mono/UbuntuMono-Bold.ttf';
    private const FONT_SIZE = 125;
    private const FONT_SIZE_LARGE = 500;

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

        $this->drawRectangle($image);
        $this->drawName($element, $image);

        $this->drawAtomicNumber($element, $image);
        $this->drawSymbol($element, $image);
        $this->drawAtomicWeight($element, $image);

        $this->drawHeatOfFusion($element, $image);
        $this->drawDensity($element, $image);
        $this->drawElectronegativity($element, $image);

        $image->save(sprintf("export/%'.03d.png", $element->getAtomicNumber()), 95, 'png');
    }

    /**
     * @param Image $image
     */
    private function drawRectangle(Image $image): void
    {
        $image->rectangle(
            self::MARGIN,
            self::MARGIN,
            self::IMAGE_DIMENSION - self::MARGIN,
            self::IMAGE_DIMENSION - self::MARGIN,
            function (AbstractShape $draw) {
                $draw->border(5, '#000');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawName(Element $element, Image $image)
    {
        $image->text(
            $element->getName(),
            self::IMAGE_DIMENSION / 2,
            self::MARGIN * 2,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('center');
                $font->valign('top');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawAtomicNumber(Element $element, Image $image): void
    {
        $image->text(
            $element->getAtomicNumber(),
            self::MARGIN * 2,
            300,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('left');
                $font->valign('top');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawSymbol(Element $element, Image $image): void
    {
        $image->text(
            $element->getSymbol(),
            self::MARGIN * 2,
            300 + self::FONT_SIZE,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE_LARGE);
                $font->valign('top');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawAtomicWeight(Element $element, Image $image): void
    {
        $image->text(
            $element->getAtomicWeight(),
            self::MARGIN * 2,
            300 + self::FONT_SIZE_LARGE,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('left');
                $font->valign('top');
            });
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawHeatOfFusion(Element $element, Image $image): void
    {
        $image->text(
            $element->getHeatOfFusion(),
            self::IMAGE_DIMENSION - self::MARGIN * 2,
            300,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('right');
                $font->valign('top');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawDensity(Element $element, Image $image): void
    {
        $image->text(
            $element->getDensity(),
            self::IMAGE_DIMENSION - self::MARGIN * 2,
            300 + self::FONT_SIZE,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('right');
                $font->valign('top');
            }
        );
    }

    /**
     * @param Element $element
     * @param Image   $image
     */
    private function drawElectronegativity(Element $element, Image $image): void
    {
        $image->text(
            $element->getElectronegativity(),
            self::IMAGE_DIMENSION - self::MARGIN * 2,
            300 + self::FONT_SIZE * 2,
            function (AbstractFont $font) {
                $font->file(self::FONT);
                $font->size(self::FONT_SIZE);
                $font->align('right');
                $font->valign('top');
            }
        );
    }
}
