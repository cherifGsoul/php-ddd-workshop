<?php

namespace Taxihub\FareCalculator\Domain\Model;

class ServedCity
{
    private $name;

    
    public static function fromString($name)
    {
        $city = new ServedCity();
        
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
