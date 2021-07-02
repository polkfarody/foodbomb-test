<?php

namespace Polk;

use DateTimeInterface;

class DayCounter {
    public static function getFullDayCount(DateTimeInterface $startDate, DateTimeInterface $endDate)
    {
        $dateTimeDiff = $endDate->diff($startDate);

        $totalDays = $dateTimeDiff->days;

        $fullDays = 0;
        if ($totalDays > 2) {
            $fullDays = $totalDays - 1;
        }

        return $fullDays;
    }
}
