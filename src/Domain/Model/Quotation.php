<?php

namespace Taxihub\FareCalculator\Domain\Model;


class Quotation
{
    private $itinerary;
    private $fare;
    
    public function __construct(Itinerary $itinerary, Fare $fare)
    {
        $this->setItinerary($itinerary);
        $this->setFare($fare);
    }

    public function itinerary()
    {
        return $this->itinerary;
    }

    public function fare()
    {
        return $this->fare;
    }

    private function setItinerary($itinerary)
    {
        $this->itinerary = $itinerary;
    }

    private function setFare($fare)
    {
        $this->fare = $fare;
    }
}
