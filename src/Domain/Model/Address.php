<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Address
{
    private $street;
    private $city;

    public function __construct($street, City $city)
    {
        $this->setStreet($street);
        $this->setCity($city);
    }
    
    public function street()
    {
        return $this->street;
    }

    public function city()
    {
        return $this->city;
    }

    private function setStreet($street)
    {
        $this->street = $street;
    }

    private function setCity(City $city)
    {
        $this->city = $city;
    }

}
