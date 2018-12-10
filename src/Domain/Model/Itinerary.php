<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Itinerary
{
    private $route;
    private $distance;
    private $duration;
    
    public function __construct(Route $route, Distance $distance, Duration $duration)
    {
        $this->setRoute($route);
        $this->setDistance($distance);
        $this->setDuration($duration);
    }

    public function route()
    {
        return $this->route;
    }

    public function distance()
    {
        return $this->distance;
    }

    public function duration()
    {
        return $this->duration;
    }

    private function setRoute($route)
    {
        $this->route = $route;
    }

    private function setDistance($distance)
    {
        $this->distance = $distance;
    }

    private function setDuration($duration)
    {
        $this->duration = $duration;
    }
}
