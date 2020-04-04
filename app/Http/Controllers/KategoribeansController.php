<?php

namespace App\Http\Controllers;
use App\KategoriBeans;
use Illuminate\Http\Request;

class KategoribeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategori_beans = KategoriBeans::orderBy('created_at','desc')->get();
        // dd($kategori);
        return view('backend.kategori_beans.index', compact('kategori_beans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori_beans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $kategori_beans = new KategoriBeans;
        $kategori_beans->kategori_beans = $request->kategori_beans;
        $kategori_beans->save();
           
        return redirect()->route('kategoribeans.index');
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
       $kategori_beans = KategoriBeans::findOrFail($id);
        return view('backend.kategori_beans.edit', compact('kategori_beans'));
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
        
         $kategori_beans = KategoriBeans::findOrFail($id);
        $kategori_beans->kategori_beans = $request->kategori_beans;
        $kategori_beans->save();
           
        return redirect()->route('kategoribeans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_beans = KategoriBeans::findOrFail($id);
       
            $kategori_beans->delete();
            return redirect()->route('kategoribeans.index');
    }
    
}
