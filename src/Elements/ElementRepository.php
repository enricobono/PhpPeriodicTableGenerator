<?php

namespace PeriodicTable\Elements;

class ElementRepository
{

    /** @var Element[] */
    private $elements = [];

    public function __construct()
    {
        $this->addElement(new Element('Be', 'Berillium', 4, 9.012, 1560, 1.85, 1.57));
        $this->addElement(new Element('Be', 'Berillium', 4, 9.012, 1560, 1.85, 1.57));
    }

    /**
     * @return Element[]
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param Element $element
     */
    private function addElement(Element $element)
    {
        $this->elements[] = $element;
    }

}
