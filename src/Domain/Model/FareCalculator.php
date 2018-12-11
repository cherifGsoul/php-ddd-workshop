<?php

namespace Taxihub\FareCalculator\Domain\Model;

class FareCalculator
{
    const MINIMUM_FARE = 50;

    public function __invoke(Passenger $passenger, Itinerary $itinerary)
    {
        $distanceFee = $itinerary->distance()->kilometers() * 40;
        $drivenTimeFee = $itinerary->drivenTime()->minutes() * 5;
        $calculatedFare = self::MINIMUM_FARE + $distanceFee + $drivenTimeFee;
        $fare = Fare::fromDinars($calculatedFare);
        return new Quotation($passenger, $itinerary, $fare);
    }
}
