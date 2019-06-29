<?php

namespace Taxihub\FareCalculator\Domain\Model;
use RuntimeException;

class FareCalculator
{
    const MINIMUM_FARE = 50;
    const DINARS_PER_KILOMETERE = 40;
    const DINARS_PER_MINUTE = 5;

    private $fare;

    public function __construct()
    {
        $this->fare = Fare::fromDinars(self::MINIMUM_FARE);
    }

    public function __invoke(Passenger $passenger, Itinerary $itinerary)
    {
        $this->calculateFareForItinerary($itinerary);
        return new Quotation($passenger, $itinerary, $this->fare);
    }

    private function calculateFareForItinerary(Itinerary $itinerary)
    {
        $this->calculateFareForDistance($itinerary->distance());
        $this->calculareFareForTime($itinerary->drivenTime());
    }

    private function calculateFareForDistance(Distance $distance)
    {
        $distanceDinars = $distance->kilometers() * self::DINARS_PER_KILOMETERE;
        $this->fare = $this->fare->add(Fare::FromDinars($distanceDinars));
    }

    private function calculareFareForTime(DrivenTime $drivenTime)
    {
        $drivenTimeDinars = $drivenTime->minutes() * self::DINARS_PER_MINUTE;
        $this->fare = $this->fare->add(Fare::FromDinars($drivenTimeDinars));
    }
}
