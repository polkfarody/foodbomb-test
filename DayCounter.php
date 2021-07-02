<?php

class DayCounter {
    public static function getFullDayCount(DateTimeInterface $startDate, DateTimeInterface $endDate)
    {
        $dateTimeDiff = $endDate->diff($startDate);

        $totalDays = $dateTimeDiff->days;

        $fullDays = 0;
        if ($totalDays > 2) {
            $fullDays = $totalDays - 1;
        }

        return $totalDays;
    }
}


echo DayCounter::getFullDayCount(new DateTime('2020-05-05'), new DateTime('2020-06-05'));
