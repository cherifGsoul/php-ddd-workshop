<?php

namespace Taxihub\FareCalculator\Domain\Model;

class City
{
    private $name;

    
    public static function fromString($name)
    {
        $city = new City();
        
        $city->setName($name);
        
        return $city;
    }
    
    public function name()
    {
        return $this->name;
    }
    
    private function __construct()
    {
    }

    private function setName($name)
    {
        $this->name = $name;
    }
}
