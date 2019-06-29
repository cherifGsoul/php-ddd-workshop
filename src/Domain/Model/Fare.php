<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Fare
{
    private $dinars;

    private function __construct()
    {
    }

    public static function fromDinars($dinars) : Fare
    {
        $fare = new Fare();

        $fare->setDinars($dinars);

        return $fare;
    }

    public function dinars()
    {
        return $this->dinars;
    }
    /**
     * 
     */
    public function equals(Fare $other)
    {
        return $this->dinars == $other->dinars;
    }

    public function add(Fare $other) : Fare
    {
        $dinars = $this->dinars + $other->dinars;
        return Fare::fromDinars($dinars);
    }

    private function setDinars($dinars)
    {
        $this->dinars = $dinars;
    }

}
