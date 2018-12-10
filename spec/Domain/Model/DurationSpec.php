<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Duration;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DurationSpec extends ObjectBehavior
{
    function it_can_be_constructed_from_minutes()
    {
        $this->beConstructedThrough('fromMinutes', [25]);
        $this->minutes()->shouldBeEqualTo(25);
    }
}
