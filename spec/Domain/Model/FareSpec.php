<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Fare;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FareSpec extends ObjectBehavior
{
    function it_can_be_constructed_from_dinars()
    {
        $this->beConstructedThrough('fromDinars', [50]);
        $this->dinars()->shouldBeEqualTo(50);
    }

    function it_can_check_for_equality()
    {
        $fare =  Fare::fromDinars(50);
        $this->beConstructedThrough('fromDinars', [50]);
        $this->equals($fare)->shouldReturn(true);
    }
}
