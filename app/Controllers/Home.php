<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'GEKINDO PHP | Beranda'
        ];

        return view('home', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'GEKINDO PHP | Sejarah'
        ];

        return view('sejarah', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'GEKINDO PHP | Profil'
        ];

        return view('profil', $data);
    }

    public function warta()
    {
        $data = [
            'title' => 'GEKINDO PHP | Warta Mingguan'
        ];

        return view('warta', $data);
    }

    public function kebaktian()
    {
        $data = [
            'title' => 'GEKINDO PHP | Kebaktian Minggu'
        ];

        return view('kebaktian', $data);
    }

    public function rekening()
    {
        $data = [
            'title' => 'GEKINDO PHP | Rekening Gereja'
        ];

        return view('rekening', $data);
    }

    public function hubungi()
    {
        $data = [
            'title' => 'GEKINDO PHP | Hubungi Kami'
        ];

        return view('hubungi', $data);
    }
}


// $routes->get('/rekening', 'Home::rekening');