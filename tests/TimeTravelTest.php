<?php

namespace DieterCoopman\TimeTravel\Tests;

use DateTime;
use DieterCoopman\TimeTravel\TimeTravel;
use PHPUnit\Framework\TestCase;


class TimeTravelTest extends TestCase
{
    /** @test */
    public function it_is_initialized()
    {
        $date = new DateTime();
        $time = new TimeTravel($date);
        $this->assertInstanceOf(TimeTravel::class, $time);
    }

    /** @test */
    public function it_travels_forth_one_year()
    {
        $time = new TimeTravel('2020-10-12');
        $time->travel("1 year")->forth();
        $this->assertEquals('2021-10-12 00:00:00',$time->format('Y-m-d H:i:s'));
    }

    /** @test */
    public function it_travels_back_one_year()
    {
        $time = new TimeTravel('2020-10-12');
        $time->travel("1 year")->back();
        $this->assertEquals('2019-10-12 00:00:00',$time->format('Y-m-d H:i:s'));
    }

}
