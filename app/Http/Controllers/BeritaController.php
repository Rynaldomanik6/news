<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use File;

class BeritaController extends Controller
{
    public function index(){
        $data = Berita::latest()->get();
        $count = count($data);
        if (empty($alert)) {
            $alert = null;
            $message = "";
        }

        return view('backend/module/berita/index', [
            'title' => 'Berita',
            'data' => $data,
            'count' => $count,
            'alert' => $alert,
            'message' => $message,
        ]);
    }

    public function tambah_berita(){
        $kategori = KategoriBerita::get();
        if (empty($alert)) {
            $alert = null;
            $message = "";
        }

        return view('backend/module/berita/tambah_berita', [
            'title' => 'Tambah Berita',
            'kategori' => $kategori,
            'alert' => $alert,
            'message' => $message,
        ]);
    }

    public function simpan_berita(Request $request){
        $slug = strtolower(str_replace(' ','_',request('judul')));
        $slug = str_replace('/','-',$slug);
        $cek = count(Berita::where('slug',$slug)->get());
        if ($cek > 0) {
            return Redirect::to('d_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Menambah Berita - Ada berita dengan judul yang sama'
            ]);
        }
        
        $modul = new Berita;
        $modul->id_categori = request('id_categori');
        $modul->judul = request('judul');
        $modul->slug = $slug;
        
        // file
        $this->validate($request, [
            'foto' => 'required|image'
        ]);

        $file = $request->file('foto');
        $ext = $file->getClientOriginalExtension();
        $path = 'public/berita';
        $file_name = "public/berita/$slug.$ext";
        $file->move($path, $file_name);

        $modul->foto = $file_name;

        if (request('isi_berita') != null) {
            $modul->isi = request('isi_berita');
        }else{
            $modul->isi = "";
        }

        $modul->view = 0;

        if ($modul->save()) {
            return Redirect::to('d_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Menambah Berita'
            ]);
        }else{
            return Redirect::to('d_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Menambah Berita'
            ]);
        }

    }

    public function edit_berita(){
        $id = request('id');
        $modul = Berita::find($id);
        $kategori = KategoriBerita::get();
        return view('backend/module/berita/edit_berita',[
            'id' => $id,
            'data' => $modul,
            'title' => 'Edit Berita',
            'kategori' => $kategori
        ]);
    }

    public function ubah_berita(Request $request){
        $modul = Berita::find($request->input('id'));
        
        $slug = strtolower(str_replace(' ','_',request('judul')));
        $slug = str_replace('/','-',$slug);
        $slug = str_replace('"',' ',$slug);
        $cek = count(Berita::where('slug',$slug)->get());
        if ($cek > 0) {
            if ($modul->slug != $slug) {
                return Redirect::to('d_berita')->with([
                    'alert' => 0,
                    'message' => 'Gagal Mengubah Berita - Ada berita dengan judul yang sama'
                ]);
            }
        }
        
        $modul->id_categori = request('id_categori');
        $modul->judul = request('judul');
        $modul->slug = $slug;


        // file
        if(request('foto') == null){
            $nama_foto = $modul->foto;
            $nama_foto_ubah = str_replace('public/','',$nama_foto);
            $ext = pathinfo(public_path($nama_foto), PATHINFO_EXTENSION);
            $file_name = "berita/$slug.$ext";
            rename(public_path($nama_foto), public_path("berita/$slug.$ext"));
        }else{
            $this->validate($request, [
                'foto' => 'required|image'
            ]);
    
            // delete old image
            File::delete($modul->foto);
    
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $path = 'berita';
            $file_name = "berita/$slug.$ext";
            $file->move($path, $file_name);
        }

        $modul->foto = $file_name;
        
        if (request('isi_berita') != null) {
            $modul->isi = request('isi_berita');
        }else{
            $modul->isi = "";
        }
        if ($modul->update()) {
            return Redirect::to('d_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Mengubah Berita'
            ]);
        }else{
            return Redirect::to('d_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Mengubah Berita'
            ]);
        }
    }

    public function hapus_berita(){
        $modul = Berita::find(request('id'));
        File::delete($modul->foto);
        if ($modul->delete()) {
            return Redirect::to('d_berita')->with([
                'alert' => 1,
                'message' => 'Berhasil Mengapus Berita'
            ]);
        }else{
            return Redirect::to('d_berita')->with([
                'alert' => 0,
                'message' => 'Gagal Mengapus Berita'
            ]);
        }
    }


}
