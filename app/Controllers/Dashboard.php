<?php

namespace App\Controllers;

use App\Models\M_dashboard;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->M_dashboard = new M_dashboard();
    }

    public function index()
    {
        $data = array(
            'total_1' => $this->M_dashboard->total_1(),
            'total_2' => $this->M_dashboard->total_2(),
            'total_3' => $this->M_dashboard->total_3(),
        );
        return view('dashboard', $data);
    }
}