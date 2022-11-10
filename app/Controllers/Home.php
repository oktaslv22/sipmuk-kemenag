<?php

namespace App\Controllers;

use App\Models\M_dashboard;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('form_tentang');
    }

    public function print()
    {
        //
    }

    public function kegiatan1()
    {
        return view('kegiatan1');
    }

    public function kegiatan2()
    {
        return view('kegiatan2');
    }

    public function kegiatan3()
    {
        return view('kegiatan3');
    }

    // public function v_keg1()
    // {
    //     return view('v_keg1');
    // }

    // public function v_keg2()
    // {
    //     return view('v_keg2');
    // }

    // public function v_keg3()
    // {
    //     return view('v_keg3');
    // }
}