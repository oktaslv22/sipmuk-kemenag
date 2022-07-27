<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function kontak()
    {
        return view('form_kontak');
    }

    public function print()
    {
        //
    }

    public function kegiatan1()
    {
        return view('kegiatan1');
    }
}