<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\BookingProduk;
use App\Mail\StrukEmail;
use App\Booking;
use Illuminate\Support\Facades\Mail;

class BookingprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
     * Method ini di akses ketika,
     * user memverikasi lewat gmail
     */
     public function verifikasiBooking(Request $request)
    {
        $booking = new Booking;
        $booking->nama = $request->nama;
        $booking->email = $request->email;
        $booking->no_tlpn = $request->no_tlpn;
        $booking->tgl_pemesanan = $request->tgl_pemesanan;
        $booking->waktu = $request->waktu;
         $booking->banyak_kursi = $request->banyak_kursi;
        // $booking->save();

        return dd($request);//redirect()->route('/');
    }

    //   public function storebooking(Request $request)
    // {
    //     $booking = new Booking;
    //     $booking->nama = $request->nama;
    //     $booking->email = $request->email;
    //     $booking->no_tlpn = $request->no_tlpn;
    //     $booking->tgl_pemesanan = $request->tgl_pemesanan;
    //     $booking->waktu = $request->waktu;
    //      $booking->banyak_kursi = $request->banyak_kursi;
    //     $booking->save();

    //     return redirect()->route('/');
    // }


    

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
