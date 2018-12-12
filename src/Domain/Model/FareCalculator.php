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
        $distanceFee = $itinerary->distance()->kilometers() * self::DINARS_PER_KILOMETERE;
        $drivenTimeFee = $itinerary->drivenTime()->minutes() * self::DINARS_PER_MINUTE;
        $calculatedFare = self::MINIMUM_FARE + $distanceFee + $drivenTimeFee;
        return Fare::fromDinars($calculatedFare);
    }
}
