<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minuman;
use Str;
use File;
use App\KategoriProduk;
use toastr;
class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minuman = Minuman::orderBy('created_at','desc')->get();
          $kategori_produks =KategoriProduk::all();
        // dd($produk);
        return view('backend.minuman.index', compact('minuman','kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kategori_produks = KategoriProduk::all();
        return view('backend.minuman.create', compact('kategori_produks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $minuman = new Minuman;
        $minuman->minuman = $request->minuman;
        $minuman->kategori_produks_id = $request->kategori_produks_id;
        $minuman->deskripsi = $request->deskripsi;
         $minuman->harga = $request->harga;
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/minuman/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $minuman->foto = $filename;
        }
            $minuman->save();
        return redirect()->route('minuman.index');
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
         $minuman = Minuman::findOrFail($id);
        $kategori_produks = KategoriProduk::all();
        return view('backend.minuman.edit', compact('minuman','kategori_produks'));
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
         $minuman = Minuman::findOrFail($id);
         $minuman->minuman = $request->minuman;
        $minuman->kategori_produks_id = $request->kategori_produks_id;
        $minuman->deskripsi = $request->deskripsi;
        $minuman->harga = $request->harga;
       
         # Foto
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/minuman/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($minuman->foto){
                $old_foto = $minuman->foto;
                $filepath = public_path().'/assets/img/minuman/'.$minuman->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $minuman->foto = $filename;
        }
        $minuman->save();
            return redirect()->route('minuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $minuman = minuman::findOrFail($id);
        if ($minuman->foto) {
            $old_foto = $minuman->foto;
            $filepath = public_path() 
            . '/assets/img/minuman' . $minuman->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
           
            $minuman->delete();
             toastr()->error('Data berhasil dihapus!');
            return redirect()->route('minuman.index');
    }
}
