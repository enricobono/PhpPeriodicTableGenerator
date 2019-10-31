<?php

namespace PeriodicTable\Elements;

class Element
{

    /** @var string */
    private $symbol;

    /** @var string */
    private $name;

    /** @var int */
    private $atomicNumber;

    /** @var string */
    private $atomicWeight;

    /** @var string */
    private $heatOfFusion;

    /** @var string */
    private $density;

    /** @var string */
    private $electronegativity;

    /**
     * Element constructor.
     *
     * @param string $symbol
     * @param string $name
     * @param int    $atomicNumber
     * @param string $atomicWeight
     * @param string $heatOfFusion
     * @param string $density
     * @param string $electronegativity
     */
    public function __construct(
        string $symbol,
        string $name,
        int $atomicNumber,
        string $atomicWeight,
        string $heatOfFusion,
        string $density,
        string $electronegativity
    ) {
        $this->symbol = $symbol;
        $this->name = $name;
        $this->atomicNumber = $atomicNumber;
        $this->atomicWeight = $atomicWeight;
        $this->heatOfFusion = $heatOfFusion;
        $this->density = $density;
        $this->electronegativity = $electronegativity;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAtomicNumber(): int
    {
        return $this->atomicNumber;
    }

    /**
     * @return string
     */
    public function getAtomicWeight(): string
    {
        return $this->atomicWeight;
    }

    /**
     * @return string
     */
    public function getHeatOfFusion(): string
    {
        return $this->heatOfFusion;
    }

    /**
     * @return string
     */
    public function getDensity(): string
    {
        return $this->density;
    }

    /**
     * @return string
     */
    public function getElectronegativity(): string
    {
        return $this->electronegativity;
    }
}
