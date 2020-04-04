<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriProduk;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 $kategori_produks = KategoriProduk::orderBy('created_at','desc')->get();
        // dd($kategori);
        return view('backend.kategori_produks.index', compact('kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori_produks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $kategori_produks = new KategoriProduk;
        $kategori_produks->kategori_produks = $request->kategori_produks;
        $kategori_produks->save();
           
        return redirect()->route('kategoriproduk.index');
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
       $kategori_produks = KategoriProduk::findOrFail($id);
        return view('backend.kategori_produks.edit', compact('kategori_produks'));
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
        
         $kategori_produks = KategoriProduk::findOrFail($id);
        $kategori_produks->kategori_produks = $request->kategori_produks;
        $kategori_produks->save();
           
        return redirect()->route('kategoriproduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_produks = KategoriProduk::findOrFail($id);
       
            $kategori_produks->delete();
            return redirect()->route('kategoriproduk.index');
    }
    
}
