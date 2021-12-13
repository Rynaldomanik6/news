<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->kategori = new KategoriBerita();
    }

    public function index()
    {
        $result = $this->kategori
            ->leftJoin('beritas', 'beritas.id_categori', '=', 'kategori_beritas.id')
            ->selectRaw('kategori_berita, count(id_categori) as jumlah')
            ->groupBy('kategori_berita')->get();
        $data = [
            'kategori' => $result,
            'title' => 'Dashboard',
        ];
        return view('backend/dashboard', $data);
    }
}
