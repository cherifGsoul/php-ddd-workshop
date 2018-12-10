<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Fare
{
    private $dinars;

    private function __construct()
    {
    }

    public static function fromDinars($dinars)
    {
        $fare = new Fare();

        $fare->setDinars($dinars);

        return $fare;
    }

    public function dinars()
    {
        return $this->dinars;
    }

    private function setDinars($dinars)
    {
        $this->dinars = $dinars;
    }

    /**
     * 
     */
    public function equals(Fare $other)
    {
        return $this->dinars == $other->dinars;
    }
}
