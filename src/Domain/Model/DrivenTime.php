<?php

namespace Taxihub\FareCalculator\Domain\Model;

class DrivenTime
{
    private $minutes;
    
    private function __construct()
    {
    }

    public static function fromMinutes(int $minutes) : DrivenTime
    {
        $drivenTime = new DrivenTime();

        $drivenTime->setMinutes($minutes);

        return $drivenTime;
    }

    public function minutes() : int
    {
        return $this->minutes;
    }

    private function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }
}
