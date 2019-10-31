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

    /** @var float */
    private $atomicWeight;

    /** @var float */
    private $heatOfFusion;

    /** @var float */
    private $density;

    /** @var float */
    private $electronegativity;

    public function __construct(
        string $symbol,
        string $name,
        int $atomicNumber,
        float $atomicWeight,
        float $heatOfFusion,
        float $density,
        float $electronegativity
    ) {
        $this->symbol            = $symbol;
        $this->name              = $name;
        $this->atomicNumber      = $atomicNumber;
        $this->atomicWeight      = $atomicWeight;
        $this->heatOfFusion      = $heatOfFusion;
        $this->density           = $density;
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
     * @return float
     */
    public function getAtomicWeight(): float
    {
        return $this->atomicWeight;
    }

    /**
     * @return float
     */
    public function getHeatOfFusion(): float
    {
        return $this->heatOfFusion;
    }

    /**
     * @return float
     */
    public function getDensity(): float
    {
        return $this->density;
    }

    /**
     * @return float
     */
    public function getElectronegativity(): float
    {
        return $this->electronegativity;
    }
}
