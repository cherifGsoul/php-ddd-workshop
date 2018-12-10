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
     * @Given I'm at :arg1 in the city of :arg2
     */
    public function imAtInTheCityOf($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given I need to go to :arg1 in the city of :arg2
     */
    public function iNeedToGoToInTheCityOf($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given the distance of the route between the two location is :arg1 KM can be driven in :arg2 min
     */
    public function theDistanceOfTheRouteBetweenTheTwoLocationIsKmCanBeDrivenInMin($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I request for a quote for this route
     */
    public function iRequestForAQuoteForThisRoute()
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

    /**
     * @Given the city of :arg1 is not listed in served cities
     */
    public function theCityOfIsNotListedInServedCities($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should not have a fare
     */
    public function iShouldNotHaveAFare()
    {
        throw new PendingException();
    }
}
