<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Itinerary;
use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\Distance;
use Taxihub\FareCalculator\Domain\Model\Duration;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\City;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ItinerarySpec extends ObjectBehavior
{
    function it_is_constructed_with_a_route_distance_and_duration()
    {
        $this->beConstructedWith(
            new Route(
                new Address(Argument::type('string'), City::fromString(Argument::type('string'))),
                new Address(Argument::type('string'), City::fromString(Argument::type('string')))
            ),
            Distance::fromKilometers(10),
            Duration::fromMinutes(25)
        );
        $this->route()->shouldBeAnInstanceOf(Route::class);
        $this->distance()->shouldBeAnInstanceOf(Distance::class);
        $this->duration()->shouldBeAnInstanceOf(Duration::class);
    }
}
