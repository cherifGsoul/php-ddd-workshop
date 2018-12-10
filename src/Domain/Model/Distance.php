<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Distance
{
    private $kilometers;

    private function __construct()
    {
    }

    public static function fromKilometers($kilometers)
    {
        $distance = new Distance();

        $distance->setKilometers($kilometers);

        return $distance;
    }

    public function kilometers()
    {
        return $this->kilometers;
    }

    private function setKilometers($kilometers)
    {
        $this->kilometers = $kilometers;
    }
}
