<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Quotation;
use Taxihub\FareCalculator\Domain\Model\Itinerary;
use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\Distance;
use Taxihub\FareCalculator\Domain\Model\Duration;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\City;
use Taxihub\FareCalculator\Domain\Model\Fare;
use Taxihub\FareCalculator\Domain\Model\Passenger;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class QuotationSpec extends ObjectBehavior
{
    function it_has_itinerary_and_fare()
    {
        $this->beConstructedWith(
            Passenger::named('Cherif'),
            new Itinerary(
                new Route(
                    new Address(Argument::type('string'), City::fromString(Argument::type('string'))),
                    new Address(Argument::type('string'), City::fromString(Argument::type('string')))
                ),
                Distance::fromKilometers(10),
                Duration::fromMinutes(25)
            ),
            Fare::fromDinars(500)
        );
        $this->itinerary()->shouldBeAnInstanceOf(Itinerary::class);
        $this->fare()->shouldBeAnInstanceOf(Fare::class);
    }
}
