<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\FareCalculator;
use Taxihub\FareCalculator\Domain\Model\Itinerary;
use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\City;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\Distance;
use Taxihub\FareCalculator\Domain\Model\Duration;
use Taxihub\FareCalculator\Domain\Model\Quotation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FareCalculatorSpec extends ObjectBehavior
{
    function it_calculate_the_fare_for_an_itinerary()
    {
        $this->__invoke(
            new Itinerary(
                new Route(
                    new Address(Argument::type('string'), City::fromString(Argument::type('string'))),
                    new Address(Argument::type('string'), City::fromString(Argument::type('string')))
                ),
                Distance::fromKilometers(10),
                Duration::fromMinutes(25)
            )
        )->shouldBeAnInstanceOf(Quotation::class);
        
    }
}
