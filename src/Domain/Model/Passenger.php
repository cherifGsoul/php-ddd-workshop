<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Passenger
{
    private $name;

    private function __construct()
    {
    }

    public static function named($name)
    {
        $passenger = new Passenger();

        $passenger->setName($name);

        return $passenger;
    }

    public function name()
    {
        return $this->name;
    }

    private function setName($name)
    {
        $this->name = $name;
    }
}
