<?php

use PHPUnit\Framework\TestCase;
use Polk\DayCounter;

class DayCounterTest extends TestCase
{
    /**
     * @dataProvider dateList
     */
    public function testGetFullDayCount(string $startDate, string $endDate, int $expectedDays): void
    {
        $startDateTime = DateTime::createFromFormat('d/m/Y', $startDate);
        $endDateTime = DateTime::createFromFormat('d/m/Y', $endDate);
        $fullDays = DayCounter::getFullDayCount($startDateTime, $endDateTime);

        $this->assertEquals($expectedDays, $fullDays);
    }

    public function dateList()
    {
        return [
            ['02/06/1983', '02/06/1983', 0],
            ['25/08/2000', '26/08/2000', 0],
            ['25/08/2000', '26/01/1988', 4594], // Doesn't matter which order.
            ['01/01/1901', '31/12/2999', 401400],
            ['02/06/1983', '22/06/1983', 19],
            ['04/07/1984', '25/12/1984', 173],
            ['03/01/1989', '03/08/1983', 1979],
            ['03/01/1009', '22/05/2099', 398253],
            ['01/01/0001', '31/12/3000', 1095725],
        ];
    }
}
