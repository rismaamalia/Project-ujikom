<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Minuman;
use App\Makanan;
use App\Beans;
use Session;
use App\BookingProduk;
use App\Mail\StrukEmail;
use App\Booking;
use Illuminate\Support\Facades\Mail;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function review()
    {
          $review = Review::all();
       return view('frontend.review', compact('review'));
    }

     public function about()
    {
       return view('frontend.about', compact('about'));
    }

       public function minuman()
    {
        $minuman = Minuman::all();
       return view('frontend.drink', compact('minuman'));
    }

      public function makanan()
    {
        $makanan = Makanan::all();
       return view('frontend.food', compact('makanan'));
    }

      public function beans()
    {
        $beans = Beans::all();
       return view('frontend.beans', compact('beans'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
	
	
          Mail::to($request->email)->send(new StrukEmail($request));
         Session::flash('sukses','Ini notifikasi SUKSES');
          

          return redirect()->route('/');
		
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
