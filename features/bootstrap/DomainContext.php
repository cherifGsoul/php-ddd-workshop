<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class DomainContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a route between the :arg1 in the city of :arg2 and the :arg3 in the city of :arg4
     */
    public function aRouteBetweenTheInTheCityOfAndTheInTheCityOf($arg1, $arg2, $arg3, $arg4)
    {
        throw new PendingException();
    }

    /**
     * @Given the itinerary distance for this route is :arg1 KM can be driven in :arg2 min
     */
    public function theItineraryDistanceForThisRouteIsKmCanBeDrivenInMin($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I request for a quote for this itinerary
     */
    public function iRequestForAQuoteForThisItinerary()
    {
        throw new PendingException();
    }

    /**
     * @Then the fare should be :arg1 DZD
     */
    public function theFareShouldBeDzd($arg1)
    {
        throw new PendingException();
    }
}
