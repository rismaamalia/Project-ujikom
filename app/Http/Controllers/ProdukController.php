<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\KategoriProduk;
use Str;
use File;
use toastr;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $produk = Produk::orderBy('created_at','desc')->get();
          $kategori_produks =KategoriProduk::all();
        // dd($produk);
        return view('backend.produk.index', compact('produk','kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_produks = KategoriProduk::all();
        return view('backend.produk.create', compact('kategori_produks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $produk = new Produk;
        $produk->produk = $request->produk;
        $produk->kategori_produks_id = $request->kategori_produks_id;
        $produk->deskripsi = $request->deskripsi;
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/produk/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $produk->foto = $filename;
        }
            $produk->save();
        return redirect()->route('produk.index');
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
        $produk = Produk::findOrFail($id);
        $kategori_produks = KategoriProduk::all();
        return view('backend.produk.edit', compact('produk','kategori_produks'));
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
        $produk = Produk::findOrFail($id);
         $produk->produk = $request->produk;
        $produk->kategori_produks_id = $request->kategori_produks_id;
        $produk->deskripsi = $request->deskripsi;
       
         # Foto
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/produk/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($produk->foto){
                $old_foto = $produk->foto;
                $filepath = public_path().'/assets/img/produk/'.$produk->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $produk->foto = $filename;
        }
        $produk->save();
            return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->foto) {
            $old_foto = $produk->foto;
            $filepath = public_path() 
            . '/assets/img/produk' . $produk->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
           
            $produk->delete();
             toastr()->error('Data berhasil dihapus!');
            return redirect()->route('produk.index');
    }
}
