<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\City;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressSpec extends ObjectBehavior
{
    function it_is_identified_by_street_and_city()
    {
        $city = City::fromString("Annaba");
        $this->beConstructedWith('an address street', $city);
        $this->city()->shouldBeAnInstanceOf(City::class);
        $this->street()->shouldBeEqualTo('an address street');
    }
}
