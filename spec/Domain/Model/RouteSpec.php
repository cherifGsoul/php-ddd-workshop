<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\City;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RouteSpec extends ObjectBehavior
{
    function it_has_origin_and_destination()
    {
        $this->beConstructedWith(
            new Address(Argument::type('string'), City::fromString(Argument::type('string'))),
            new Address(Argument::type('string'), City::fromString(Argument::type('string')))
        );
        $this->origin()->shouldBeAnInstanceOf(Address::class);
        $this->destination()->shouldBeAnInstanceOf(Address::class);
    }
}
