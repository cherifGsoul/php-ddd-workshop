<?php

namespace Taxihub\FareCalculator\Domain\Model;

class FareCalculator
{
    const MINIMUM_FARE = 50;

    public function __invoke(Itinerary $itinerary)
    {
        $distanceFee = $itinerary->distance()->kilometers() * 40;
        $durationFee = $itinerary->duration()->minutes() * 5;
        $calculatedFare = self::MINIMUM_FARE + $distanceFee + $durationFee;
        $fare = Fare::fromDinars($calculatedFare);
        return new Quotation($itinerary, $fare);
    }
}
