<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Str;
use File;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $review = Review::orderBy('created_at','desc')->get();
        // dd($review);
        return view('backend.review.index', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $review = new Review;
        $review->penulis = $request->penulis;
        $review->review = $request->review;
        // upload foto
      if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/review/';
            $filename = Str::random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $review->foto = $filename;
        }
            $review->save();
           
        return redirect()->route('review.index');
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
        $review = Review::findOrFail($id);
        return view('backend.review.edit', compact('review'));
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
        
         $review = Review::findOrFail($id);
        $review->penulis = $request->penulis;
        $review->review = $request->review;
       
         # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/review/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($review->foto){
                $old_foto = $review->foto;
                $filepath = public_path().'/assets/img/review/'.$review->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $review->foto = $filename;
        }
        $review->save();
            return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $review = Review::findOrFail($id);
        if ($review->foto) {
            $old_foto = $review->foto;
            $filepath = public_path() 
            . '/assets/img/review' . $review->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
            $review->delete();
            return redirect()->route('review.index');
    }
}
