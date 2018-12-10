<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Distance;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DistanceSpec extends ObjectBehavior
{
    function it_can_be_constructed_from_kilometers()
    {
        $this->beConstructedThrough('fromKilometers', [10]);
        $this->kilometers()->shouldBeEqualTo(10);
    }
}
