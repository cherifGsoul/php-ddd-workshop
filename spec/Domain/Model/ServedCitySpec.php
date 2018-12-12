<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\ServedCity;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServedCitySpec extends ObjectBehavior
{
    function it_has_a_name()
    {
        $this->beConstructedThrough('fromString', ["Annaba"]);
        $this->name()->shouldBeEqualTo("Annaba");
    }
}
