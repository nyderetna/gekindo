<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelayanModel;
use App\Models\WartaModel;

class Home extends BaseController
{
    protected $PelayanModel;
    protected $WartaModel;

    public function __construct()
    {
        $this->PelayanModel = new PelayanModel();
        $this->WartaModel = new WartaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'GEKINDO PHP | Beranda',
            'h1' => 'Beranda',
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

        $pelayan = $this->PelayanModel->findAll();
        $data = [
            'title' => 'GEKINDO PHP | Profil',
            'h1' => 'Profil Pelayan',
            'pelayan' => $pelayan
        ];

        return view('profil', $data);
    }

    public function detail($slug)
    {
        echo $slug;
    }

    public function warta()
    {
        $warta = $this->WartaModel->findAll();
        $data = [
            'title' => 'GEKINDO PHP | Warta Mingguan',
            'h1' => 'Warta Mingguan',
            'warta' => $warta
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

    public function visimisi()
    {
        $data = [
            'title' => 'GEKINDO PHP | Visi & Misi',
            'h1' => 'Visi & Misi, Moto, dan Identitas Gereja'

        ];

        return view('visimisi', $data);
    }

    public function adart()
    {
        $data = [
            'title' => 'GEKINDO PHP | AD & ART Gereja',
            'h1' => 'AD & ART Gereja'

        ];

        return view('adart', $data);
    }

    public function get_content($selectedDate)
    {
        // You can adjust this query based on your database structure and the selected date
        $content = $this->WartaModel->getContentByDate($selectedDate);

        return $this->response->setJSON($content);
    }
}
// $routes->get('/rekening', 'Home::rekening');