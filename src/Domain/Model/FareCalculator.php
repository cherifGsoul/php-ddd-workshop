<?php

namespace Taxihub\FareCalculator\Domain\Model;
use RuntimeException;

class FareCalculator
{
    const MINIMUM_FARE = 50;
    const DINARS_PER_KILOMETERE = 40;
    const DINARS_PER_MINUTE = 5;

    public function __invoke(Passenger $passenger, Itinerary $itinerary)
    {
        $fare = $this->calculateFareForItinerary($itinerary);
        return new Quotation($passenger, $itinerary, $fare);
    }

    private function calculateFareForItinerary(Itinerary $itinerary)
    {
        $fare = Fare::fromDinars(self::MINIMUM_FARE);
        $distanceDinars = $this->calculateFareForDistance($itinerary->distance());
        $drivenTimeDinars = $this->calculareFareForTime($itinerary->drivenTime());
        $fare = $fare->add($distanceDinars);
        return $fare->add($drivenTimeDinars);
    }

    private function calculateFareForDistance(Distance $distance)
    {
        $distanceDinars = $distance->kilometers() * self::DINARS_PER_KILOMETERE;
        return Fare::FromDinars($distanceDinars);
    }

    private function calculareFareForTime(DrivenTime $drivenTime)
    {
        $drivenTimeDinars = $drivenTime->minutes() * self::DINARS_PER_MINUTE;
        return Fare::FromDinars($drivenTimeDinars);
    }
}
