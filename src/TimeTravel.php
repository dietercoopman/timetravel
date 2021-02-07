<?php namespace DieterCoopman\TimeTravel;

use Carbon\Carbon;
use DateTime;

class TimeTravel
{
    private $time;
    private $timelapse;

    public function __construct(DateTime|Carbon|string $time)
    {
        if ($time instanceof Carbon) {
            $this->time = $time;
        } else {
            $this->time = Carbon::parse($time);
        }
    }

    public function travel($timelapse): TimeTravel
    {
        $this->timelapse = $timelapse;
        return $this;
    }

    public function back(): TimeTravel
    {
        $this->time = $this->time->sub($this->timelapse);
        return $this;
    }

    public function forth(): TimeTravel
    {
        $this->time = $this->time->add($this->timelapse);
        return $this;
    }

    public function __toString()
    {
        return $this->time->toDateTimeString();
    }

    public function __call($method, $args)
    {
        return $this->time->$method($args[0]);
    }
}
