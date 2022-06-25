<?php

namespace App\Services;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class DateService
{
    public function generateTable(Request $request, $day)
    {
        $now = Carbon::now();
        $quarter = @$request->quarter ?? $now->quarter;
        $year = @$request->year ?? $now->year;

        $quarterMonths = $this->getQuarterFirstAndLastMonth($quarter);

        $dates = [];
        $start = Carbon::parse("first " . $day . " of " . $quarterMonths['first'] . ' ' . $year);
        $end = Carbon::parse("last " . $day . " of " . $quarterMonths['last'] . ' '  . $year);

        $datePeriod = new \DatePeriod(
            $start,
            CarbonInterval::week(),
            $end->addWeek()
        );

        foreach ($datePeriod as $period) {
            $dates[$period->localeMonth][] = $period->day;
        }

        return $dates;
    }

    public function getQuarterFirstAndLastMonth($quarter)
    {
        switch ($quarter) {
            case '1':
                return [
                    'first' => 'january',
                    'last' => 'march'
                ];
                break;
            case '2':
                return [
                    'first' => 'april',
                    'last' => 'june'
                ];
                break;
            case '3':
                return [
                    'first' => 'july',
                    'last' => 'september'
                ];
                break;
            default:
                return [
                    'first' => 'october',
                    'last' => 'december'
                ];
                break;
        }
    }
}
