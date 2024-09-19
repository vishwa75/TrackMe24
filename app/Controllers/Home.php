<?php

namespace App\Controllers;
use DateTime;
use Exception;

class Home extends BaseController
{
    public function initialPageLoading()
    {
        // Get the current date and time
        $fulldate = date('Y-m-d H:i:s');
        $year = date('Y');
        $monthInNumber = (int)date('m'); // Ensure this is an integer
        $month = date('F');
        $time = date('H:i');
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $monthInNumber, $year); // Pass monthInNumber as integer
        $dateArray = [];
        $sunday = [];
        $monday = [];
        $tuesday = [];
        $wednesday = [];
        $thursday = [];
        $friday = [];
        $saturday = [];

        for($day = 1; $day <= $daysInMonth; $day++){
                $dateArray[] = $year."-".$monthInNumber."-".$day;
            // $dateArray[] = $year."-".str_pad($monthInNumber, 2, '0', STR_PAD_LEFT)."-".str_pad($day, 2, '0', STR_PAD_LEFT);
        }

        foreach ($dateArray as $eachday) {
            $dayOfWeek = strtolower(date('l', strtotime($eachday)));
            $date = new DateTime($eachday);
            $dateOnlyWithZero = $date->format('d');
            $dateOnly = ltrim($dateOnlyWithZero, '0');
            
            switch ($dayOfWeek) {
                case 'sunday':
                    $sunday[] = $dateOnly;
                    break;
                case 'monday':
                    $monday[] = $dateOnly;
                    break;
                case 'tuesday':
                    $tuesday[] = $dateOnly;
                    break;
                case 'wednesday':
                    $wednesday[] = $dateOnly;
                    break;
                case 'thursday':
                    $thursday[] = $dateOnly;
                    break;
                case 'friday':
                    $friday[] = $dateOnly;
                    break;
                case 'saturday':
                    $saturday[] = $dateOnly;
                    break;
                default:
                    echo "Issue With Date Format";
                    break;
            }
        }

        $initialPageValue = [
            'fulldate' => $fulldate,
            'year' => $year,
            'month' => $month,
            'monthInNumber' => $monthInNumber,
            'date' => date('d'),  // Ensure this is the current day
            'time' => $time,
            'sunday' => $sunday,
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
            'sundayCount' => count($sunday),
            'mondayCount' => count($monday),
            'tuesdayCount' => count($tuesday),
            'wednesdayCount' => count($wednesday),
            'thursdayCount' => count($thursday),
            'fridayCount' => count($friday),
            'saturdayCount' => count($saturday)
        ];

        echo view('header');
        echo view('Home/homeView', $initialPageValue);
        echo view('footer');
    }


    public function yearMonthFilter()
    {
        // Get the current date and time
        $fulldate = date('Y-m-d H:i:s');
        $year = date('Y');
        $monthInNumber = (int)date('m'); // Ensure this is an integer
        $month = date('F');
        $time = date('H:i');
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $monthInNumber, $year); // Pass monthInNumber as integer
        $dateArray = [];
        $sunday = [];
        $monday = [];
        $tuesday = [];
        $wednesday = [];
        $thursday = [];
        $friday = [];
        $saturday = [];

        for($day = 1; $day <= $daysInMonth; $day++){
                $dateArray[] = $year."-".$monthInNumber."-".$day;
            // $dateArray[] = $year."-".str_pad($monthInNumber, 2, '0', STR_PAD_LEFT)."-".str_pad($day, 2, '0', STR_PAD_LEFT);
        }

        foreach ($dateArray as $eachday) {
            $dayOfWeek = strtolower(date('l', strtotime($eachday)));
            $date = new DateTime($eachday);
            $dateOnlyWithZero = $date->format('d');
            $dateOnly = ltrim($dateOnlyWithZero, '0');
            
            switch ($dayOfWeek) {
                case 'sunday':
                    $sunday[] = $dateOnly;
                    break;
                case 'monday':
                    $monday[] = $dateOnly;
                    break;
                case 'tuesday':
                    $tuesday[] = $dateOnly;
                    break;
                case 'wednesday':
                    $wednesday[] = $dateOnly;
                    break;
                case 'thursday':
                    $thursday[] = $dateOnly;
                    break;
                case 'friday':
                    $friday[] = $dateOnly;
                    break;
                case 'saturday':
                    $saturday[] = $dateOnly;
                    break;
                default:
                    echo "Issue With Date Format";
                    break;
            }
        }

        $initialPageValue = [
            'fulldate' => $fulldate,
            'year' => $year,
            'month' => $month,
            'monthInNumber' => $monthInNumber,
            'date' => date('d'),  // Ensure this is the current day
            'time' => $time,
            'sunday' => $sunday,
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
            'sundayCount' => count($sunday),
            'mondayCount' => count($monday),
            'tuesdayCount' => count($tuesday),
            'wednesdayCount' => count($wednesday),
            'thursdayCount' => count($thursday),
            'fridayCount' => count($friday),
            'saturdayCount' => count($saturday)
        ];

        echo view('header');
        echo view('Home/homeView', $initialPageValue);
        echo view('footer');
    }

}
