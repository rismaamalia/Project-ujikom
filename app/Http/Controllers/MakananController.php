<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use Str;
use File;
use App\KategoriProduk;
use toastr;
class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = makanan::orderBy('created_at','desc')->get();
          $kategori_produks =KategoriProduk::all();
        // dd($produk);
        return view('backend.makanan.index', compact('makanan','kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kategori_produks = KategoriProduk::all();
        return view('backend.makanan.create', compact('kategori_produks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan = new makanan;
        $makanan->makanan = $request->makanan;
        $makanan->kategori_produks_id = $request->kategori_produks_id;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->harga = $request->harga;
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/makanan/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $makanan->foto = $filename;
        }
            $makanan->save();
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $makanan = makanan::findOrFail($id);
        $kategori_produks = KategoriProduk::all();
        return view('backend.makanan.edit', compact('makanan','kategori_produks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $makanan = makanan::findOrFail($id);
         $makanan->makanan = $request->makanan;
        $makanan->kategori_produks_id = $request->kategori_produks_id;
        $makanan->deskripsi = $request->deskripsi;
         $makanan->harga = $request->harga;
       
         # Foto
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/makanan/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($makanan->foto){
                $old_foto = $makanan->foto;
                $filepath = public_path().'/assets/img/makanan/'.$makanan->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $makanan->foto = $filename;
        }
        $makanan->save();
            return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $makanan = makanan::findOrFail($id);
        if ($makanan->foto) {
            $old_foto = $makanan->foto;
            $filepath = public_path() 
            . '/assets/img/makanan' . $makanan->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
           
            $makanan->delete();
             toastr()->error('Data berhasil dihapus!');
            return redirect()->route('makanan.index');
    }
}
