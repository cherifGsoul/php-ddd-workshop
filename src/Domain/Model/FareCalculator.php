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
        $fare = $this->calculateFareForDistance($itinerary->distance(), $fare);
        $fare = $this->calculareFareForTime($itinerary->drivenTime(), $fare);
        return $fare;
    }

    private function calculateFareForDistance(Distance $distance, Fare $fare)
    {
        $distanceDinars = $distance->kilometers() * self::DINARS_PER_KILOMETERE;
        return $fare->add(Fare::FromDinars($distanceDinars));
    }

    private function calculareFareForTime(DrivenTime $drivenTime, Fare $fare)
    {
        $drivenTimeDinars = $drivenTime->minutes() * self::DINARS_PER_MINUTE;
        return $fare->add(Fare::FromDinars($drivenTimeDinars));
    }
}
