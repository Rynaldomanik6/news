<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Models\Berita;
use App\Models\KategoriBerita;

class FrontController extends Controller
{
    public function index(){
        $mostview_footer = Berita::orderBy('view','desc')->get()->take(3);
        $popcategory_footer = KategoriBerita::orderBy('view','desc')->get();
        $postgalery_footer = Berita::latest()->get()->take(9);
        $top_stories = Berita::orderBy('view','desc')->get()->take(4);
        $berita_terbaru = Berita::latest()->get()->take(4);
        return view('front.index',[
            'title' => "Beranda",
            'mostview_footer' => $mostview_footer,
            'popcategory_footer' => $popcategory_footer,
            'postgalery_footer' => $postgalery_footer,
            'top_stories' => $top_stories,
            'berita_terbaru' => $berita_terbaru,
        ]);
    }

    public function berita_terbaru(){
        $modul = Berita::latest()->paginate(5);
        $mostview_footer = Berita::orderBy('view','desc')->get()->take(3);
        $popcategory_footer = KategoriBerita::orderBy('view','desc')->get();
        $postgalery_footer = Berita::latest()->get()->take(9);
        $top_stories = Berita::orderBy('view','desc')->get()->take(4);
        $kategori = KategoriBerita::get();
        return view('front.berita_terbaru',[
            'title' => "Berita Terbaru",
            'modul' => $modul,
            'mostview_footer' => $mostview_footer,
            'popcategory_footer' => $popcategory_footer,
            'postgalery_footer' => $postgalery_footer,
            'top_stories' => $top_stories,
            'kategori' => $kategori,
        ]);
    }

    public function kategori_berita($slug){
        $kategori_berita = str_replace('_',' ',$slug);
        $get_kategori = KategoriBerita::where('kategori_berita',$kategori_berita)->get()->first();
        $modul = Berita::where('id_categori',$get_kategori->id)->latest()->paginate(5);
        $mostview_footer = Berita::orderBy('view','desc')->get()->take(3);
        $popcategory_footer = KategoriBerita::orderBy('view','desc')->get();
        $postgalery_footer = Berita::latest()->get()->take(9);
        $top_stories = Berita::orderBy('view','desc')->get()->take(4);
        $kategori = KategoriBerita::get();
        return view('front.kategori_berita',[
            'title' => "Kategori Berita",
            'modul' => $modul,
            'mostview_footer' => $mostview_footer,
            'popcategory_footer' => $popcategory_footer,
            'postgalery_footer' => $postgalery_footer,
            'top_stories' => $top_stories,
            'kategori' => $kategori,
            'slug' => $slug
        ]);
    }

    public function postingan($slug){
        $modul = Berita::where('slug',$slug)->get()->first();
        $mostview_footer = Berita::orderBy('view','desc')->get()->take(3);
        $popcategory_footer = KategoriBerita::orderBy('view','desc')->get();
        $postgalery_footer = Berita::latest()->get()->take(9);
        $top_stories = Berita::orderBy('view','desc')->get()->take(4);
        $kategori = KategoriBerita::get();
        $berita_terbaru = Berita::latest()->get()->take(6);
        return view('front.postingan',[
            'title' => "Postingan",
            'modul' => $modul,
            'mostview_footer' => $mostview_footer,
            'popcategory_footer' => $popcategory_footer,
            'postgalery_footer' => $postgalery_footer,
            'top_stories' => $top_stories,
            'kategori' => $kategori,
            'slug' => $modul->judul,
            'berita_terbaru' => $berita_terbaru,
        ]);
    }
}
