<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use File;

class KategoriBeritaController extends Controller
{
    public function index(){
        $data = KategoriBerita::latest()->get();
        $count = count($data);
        if (empty($alert)) {
            $alert = null;
            $message = "";
        }

        return view('backend/module/data_master/kategori_berita/index', [
            'title' => 'Kategori Berita',
            'data' => $data,
            'count' => $count,
            'alert' => $alert,
            'message' => $message,
        ]);
    }

    public function tambah_kategori_berita(){
        if (empty($alert)) {
            $alert = null;
            $message = "";
        }

        return view('backend/module/data_master/kategori_berita/tambah_kategori', [
            'title' => 'Tambah Kategori Berita',
            'alert' => $alert,
            'message' => $message,
        ]);
    }

    public function tambah(Request $request){
        $modul = new KategoriBerita;
        $modul->kategori_berita = request('kategori_berita');
        $modul->view = 0;

        if ($modul->save()) {
            return Redirect::to('kategori_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Menambah Kategori berita'
            ]);
        }else{
            return Redirect::to('kategori_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Menambah Kategori berita'
            ]);
        }

    }

    public function edit_kategori_berita(){
        $id = request('id');
        $modul = KategoriBerita::find($id);
        return view('backend/module/data_master/kategori_berita/edit_kategori',[
            'id' => $id,
            'data' => $modul,
            'title' => 'Edit Kategori Berita',
        ]);
    }

    public function ubah_kategori_berita(Request $request){
        $modul = KategoriBerita::find($request->input('id'));        
        $modul->kategori_berita = request('kategori_berita');

        if ($modul->update()) {
            return Redirect::to('kategori_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Mengubah Kategori berita'
            ]);
        }else{
            return Redirect::to('kategori_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Mengubah Kategori berita'
            ]);
        }
    }

    public function hapus(){
        $modul = KategoriBerita::find(request('id'));
        $getberita = Berita::where('id_categori',$modul->id)->get();
        if (count($getberita) > 0) {
            foreach ($getberita as $key => $value) {
                $berita = Berita::find($value->id);
                File::delete($berita->foto);
                $berita->delete();
            }
        }
        if ($modul->delete()) {
            return Redirect::to('kategori_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Mengapus Kategori berita'
            ]);
        }else{
            return Redirect::to('kategori_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Mengapus Kategori berita'
            ]);
        }
    }
}
