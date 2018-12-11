<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Taxihub\FareCalculator\Domain\Model\Route;
use Taxihub\FareCalculator\Domain\Model\Address;
use Taxihub\FareCalculator\Domain\Model\City;
use Taxihub\FareCalculator\Domain\Model\Distance;
use Taxihub\FareCalculator\Domain\Model\DrivenTime;
use Taxihub\FareCalculator\Domain\Model\Itinerary;
use Taxihub\FareCalculator\Domain\Model\FareCalculator;
use Taxihub\FareCalculator\Domain\Model\Fare;
use Taxihub\FareCalculator\Domain\Model\Passenger;

/**
 * Defines application features from the specific context.
 */
class DomainContext implements Context
{
    private $fareCalculator;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->fareCalculator = new FareCalculator();
    }

    /**
     * @Transform :originCity
     * @Transform :destinationCity
     */
    public function transformCity($string)
    {
        return City::fromString($string);
    }

    /**
     * @Transform :kilometers
     */
    public function transformKilometers($kilometers)
    {
        return Distance::fromKilometers($kilometers);
    }

    /**
     * @Transform :minutes
     */
    public function transformMinutes($minutes)
    {
        return DrivenTime::fromMinutes($minutes);
    }

     /**
     * @Transform :dinars
     */
    public function transformDinars($dinars)
    {
        return Fare::fromDinars($dinars);
    }

    /**
     * @Transform :passenger
     */
    public function transforPassenger($passenger)
    {
        return Passenger::named($passenger);
    }

    /**
     * @Given a route between the :originStreet in the city of :originCity and the :destinationStreet in the city of :destinationCity
     */
    public function aRouteBetweenTheInTheCityOfAndTheInTheCityOf($originStreet, $originCity, $destinationStreet, $destinationCity)
    {
        $this->route = new Route(
            new Address($originStreet, $originCity),
            new Address($destinationStreet, $destinationCity)
        );
    }

    /**
     * @Given the itinerary distance for this route is :kilometers KM can be driven in :minutes min
     */
    public function theItineraryDistanceForThisRouteIsKmCanBeDrivenInMin($kilometers, $minutes)
    {
        $this->itinerary = new Itinerary(
            $this->route,
            $kilometers,
            $minutes
        );
    }

    /**
     * @When :passenger request for a quote for this itinerary
     */
    public function iRequestForAQuoteForThisItinerary($passenger)
    {
        $fareCalculator = $this->fareCalculator;
        $this->quotation = $fareCalculator($passenger, $this->itinerary);
    }

    /**
     * @Then the quotation fare should be :dinars DZD
     */
    public function theFareShouldBeDzd($dinars)
    {
        expect($this->quotation->fare()->equals($dinars))->to->be->true;
    }
}
