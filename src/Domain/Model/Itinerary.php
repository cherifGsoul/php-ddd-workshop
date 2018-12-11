<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Itinerary
{
    private $route;
    private $distance;
    private $drivenTime;
    
    public function __construct(Route $route, Distance $distance, DrivenTime $drivenTime)
    {
        $this->setRoute($route);
        $this->setDistance($distance);
        $this->setDrivenTime($drivenTime);
    }

    public function route()
    {
        return $this->route;
    }

    public function distance()
    {
        return $this->distance;
    }

    public function drivenTime()
    {
        return $this->drivenTime;
    }

    private function setRoute($route)
    {
        $this->route = $route;
    }

    private function setDistance($distance)
    {
        $this->distance = $distance;
    }

    private function setDrivenTime($drivenTime)
    {
        $this->drivenTime = $drivenTime;
    }
}
