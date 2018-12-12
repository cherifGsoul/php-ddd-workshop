<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Address
{
    private $street;
    private $servedCity;

    public function __construct($street, ServedCity $servedCity)
    {
        $this->setStreet($street);
        $this->setServedCity($servedCity);
    }
    
    public function street()
    {
        return $this->street;
    }

    public function servedCity()
    {
        return $this->servedCity;
    }

    private function setStreet($street)
    {
        $this->street = $street;
    }

    private function setServedCity(servedCity $servedCity)
    {
        $this->servedCity = $servedCity;
    }

}
