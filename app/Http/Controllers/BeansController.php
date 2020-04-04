<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beans;
use App\KategoriProduk;
use Str;
use File;
class BeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beans = Beans::orderBy('created_at','desc')->get();
          $kategori_produks =KategoriProduk::all(); 
        // dd($beans);
        return view('backend.beans.index', compact('beans','kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kategori_produks = KategoriProduk::all();
        return view('backend.beans.create', compact('kategori_produks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beans = new Beans;
        $beans->beans = $request->beans;
        $beans->kategori_produks_id = $request->kategori_produks_id;
        $beans->deskripsi = $request->deskripsi;
        $beans->harga = $request->harga;
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/beans/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $beans->foto = $filename;
        }
            $beans->save();
        return redirect()->route('beans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $beans = Beans::findOrFail($id);
        $kategori_produks = KategoriProduk::all();
        return view('backend.beans.edit', compact('beans','kategori_produks'));
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
        $beans = Beans::findOrFail($id);
         $beans->beans = $request->beans;
        $beans->kategori_produks = $request->kategori_produks_id;
        $beans->deskripsi = $request->deskripsi;
        $beans->harga = $request->harga;
       
         # Foto
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/beans/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($beans->foto){
                $old_foto = $beans->foto;
                $filepath = public_path().'/assets/img/beans/'.$beans->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $beans->foto = $filename;
        }
        $beans->save();
            return redirect()->route('beans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $beans = Beans::findOrFail($id);
        if ($beans->foto) {
            $old_foto = $beans->foto;
            $filepath = public_path() 
            . '/assets/img/beans' . $beans->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
            $beans->delete();
            return redirect()->route('beans.index');
    }
}
