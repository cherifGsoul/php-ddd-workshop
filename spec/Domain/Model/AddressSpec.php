<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\ServedCity;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressSpec extends ObjectBehavior
{
    function it_is_identified_by_street_and_city()
    {
        $city = ServedCity::fromString("Annaba");
        $this->beConstructedWith('an address street', $city);
        $this->servedCity()->shouldBeAnInstanceOf(ServedCity::class);
        $this->street()->shouldBeEqualTo('an address street');
    }
}
