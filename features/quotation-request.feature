Feature: Quotation request

	As a taxi rider
	In order to know the fare of my trip upfront
	I need to be able to request quotaion

	Rules:
		- The minimum fee is 50 DZD
		- The unit fee per kilometer is 40 DZD
		- The unit fee for the time spent in the taxi is 5 DZD per minute

	Scenario: Quotation request for a route with origin and destination in served cities
		Given a route between the "Palace of culture Mohamed BOUDIAF" in the city of "Annaba" and the "Aéroport International d'Annaba - Rabah Bitat" in the city of "El Bouni"
		And the itinerary distance for this route is 10 KM can be driven in 25 min
		When Cherif request for a quote for this itinerary
		Then the quotation estimated fare should be 575 DZD