<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Route
{
    private $origin;
    private $destination;

    public function __construct(Address $origin, Address $destination)
    {
        $this->setOrigin($origin);
        $this->setDestination($destination);
    }

    public function origin()
    {
        return $this->origin;
    }

    public function destination()
    {
        return $this->destination;
    }

    private function setOrigin($origin)
    {
        $this->origin = $origin;
    }
    
    private function setDestination($destination)
    {
        $this->destination = $destination; 
    }

}
