<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\FareCalculator;
use Taxihub\FareCalculator\Domain\Model\Itinerary;
use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\ServedCity;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\Distance;
use Taxihub\FareCalculator\Domain\Model\DrivenTime;
use Taxihub\FareCalculator\Domain\Model\Quotation;
use Taxihub\FareCalculator\Domain\Model\Passenger;
use Taxihub\FareCalculator\Domain\Model\ServedCities;
use Taxihub\FareCalculator\Domain\Model\RouteProblemException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FareCalculatorSpec extends ObjectBehavior
{
    function it_calculate_the_fare_for_an_itinerary()
    {
        $originCity = ServedCity::fromString('Annaba');
        $destinationCity = ServedCity::fromString('El Bouni');

        $this->__invoke(
            Passenger::named('Cherif'),
            new Itinerary(
                new Route(
                    new Address(Argument::type('string'), $originCity),
                    new Address(Argument::type('string'), $destinationCity)
                ),
                Distance::fromKilometers(10),
                DrivenTime::fromMinutes(25)
            )
        )->shouldBeAnInstanceOf(Quotation::class);
    }
}
