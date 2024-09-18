<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        //$date = now();
        $dashboardData = [
            'fulldate' => date('Y-m-d H:i:s'),
            'year' => date('Y'),
            'month' => date('F'),
            'date' => date('d'),
            'time' => date('H:i')

        ];
        
     


        echo view('header' , $dashboardData);
        echo view('Home/home',$dashboardData);
        echo view('footer');
    }
}
