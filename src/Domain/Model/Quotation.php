<?php

namespace Taxihub\FareCalculator\Domain\Model;


class Quotation
{
    private $passenger;
    private $itinerary;
    private $fare;
    
    public function __construct(Passenger $passenger, Itinerary $itinerary, Fare $fare)
    {
        $this->setPassenger($passenger);
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

    private function setPassenger(Passenger $passenger)
    {
        $this->passenger = $passenger;
    }

    private function setItinerary(Itinerary $itinerary)
    {
        $this->itinerary = $itinerary;
    }

    private function setFare(Fare $fare)
    {
        $this->fare = $fare;
    }
}
