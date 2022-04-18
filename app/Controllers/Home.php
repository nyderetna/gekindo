<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'GEKINDO PHP | Beranda',
            'h1' => 'Beranda'
        ];

        return view('home', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'GEKINDO PHP | Sejarah',
            'h1' => 'Sejarah'
        ];

        return view('sejarah', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'GEKINDO PHP | Profil',
            'h1' => 'Profil'
        ];

        return view('profil', $data);
    }

    public function warta()
    {
        $data = [
            'title' => 'GEKINDO PHP | Warta Mingguan',
            'h1' => 'Warta Mingguan'
        ];

        return view('warta', $data);
    }

    public function kebaktian()
    {
        $data = [
            'title' => 'GEKINDO PHP | Kebaktian dan Pelayanan',
            'h1' => 'Kebaktian dan Pelayanan'
        ];

        return view('kebaktian', $data);
    }

    public function rekening()
    {
        $data = [
            'title' => 'GEKINDO PHP | Rekening Gereja',
            'h1' => 'Rekening Gereja'
        ];

        return view('rekening', $data);
    }

    public function hubungi()
    {
        $data = [
            'title' => 'GEKINDO PHP | Hubungi Kami',
            'h1' => 'Hubungi Kami'
        ];

        return view('hubungi', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'GEKINDO PHP | Galeri',
            'h1' => 'Galeri'

        ];

        return view('galeri', $data);
    }
}


// $routes->get('/rekening', 'Home::rekening');