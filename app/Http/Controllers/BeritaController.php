<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Berita;
use File;
use Auth;
use Str;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $berita = Berita::orderBy('created_at','desc')->get();
        // dd($berita);
        return view('backend.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  return view('backend.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Auth::user()->id;
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->slug = Str::slug($request->judul,'-');
        $berita->user_id = $user;
       
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/berita/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $berita->foto = $filename;
        }
            $berita->save();
           
        return redirect()->route('berita.index');

           
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
        
       $berita = Berita::findOrFail($id);
        return view('backend.berita.edit', compact('berita'));
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
        
        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul, '-');
        $berita->konten = $request->konten;
        $berita->user_id = Auth::user()->id;
        
       
         # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/berita/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($berita->foto){
                $old_foto = $berita->foto;
                $filepath = public_path().'/assets/img/berita/'.$berita->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $berita->foto = $filename;
        }
        $berita->save();
            return redirect()->route('berita.index');
            
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $berita = Berita::findOrFail($id);
        if ($berita->foto) {
            $old_foto = $berita->foto;
            $filepath = public_path() 
            . '/assets/img/berita' . $berita->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
            $berita->delete();
            return redirect()->route('berita.index');
    }
}
