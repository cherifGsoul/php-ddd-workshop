<?php

namespace spec\Taxihub\FareCalculator\Domain\Model;

use Taxihub\FareCalculator\Domain\Model\Passenger;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PassengerSpec extends ObjectBehavior
{
    function it_is_constructed_with_a_name()
    {
        $this->beConstructedNamed('Cherif');
        $this->name()->shouldBeEqualTo('Cherif');
    }
}
