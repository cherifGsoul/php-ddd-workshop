<?php

namespace Taxihub\FareCalculator\Domain\Model;

class Duration
{
    private $minutes;
    
    private function __construct()
    {
    }

    public static function fromMinutes($minutes)
    {
        $duration = new Duration();

        $duration->setMinutes($minutes);

        return $duration;
    }

    public function minutes()
    {
        return $this->minutes;
    }

    private function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }
}
