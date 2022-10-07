<?php

namespace App\Controllers;

class MenuController extends BaseController
{
    public function beranda()
    {
        return view('beranda');
    }

    public function infokegiatan()
    {
        return view('infokegiatan');
    }

    public function datasiswa()
    {
        return view('datasiswa');
    }
}
