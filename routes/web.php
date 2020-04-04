<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
Route::get('/', 'FrontendController@index')->name('/');
Route::get('/review','FrontendController@review')->name('review');
Route::get('/about','FrontendController@about')->name('about');
Route::get('/minuman','FrontendController@minuman')->name('minuman');
Route::get('/makanan','FrontendController@makanan')->name('makanan');
Route::get('/bijikopi','FrontendController@beans')->name('beans');
Route::post('/booking', 'BookingprodukController@store')->name('booking.frontend'); //biar ga bingung

// Route::post('/booking', 'BookingController@storebooking')->name('booking.storebooking');
Route::post('/booking/verify', 'BookingprodukController@verifikasiBooking')->name('verifikasi.booking');
 




Route::get('/food', function () {
    return view('frontend.food');
})->name('frontend.food');


Route::get('/beans', function () {
    return view('frontend.beans');
})->name('frontend.beans');


Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');


// Route::get('/review', function () {
//     return view('frontend.review');
// })->name('frontend.review');


Route::get('/registermembers', function () {
    return view('frontend.registermembers');
})->name('frontend.registermembers');

Route::get('/loginmembers', function () {
    return view('frontend.loginmembers');
})->name('frontend.loginmembers');


Route::get('/booking', function () {
    return view('frontend.booking');
})->name('frontend.booking');



// Route::post('/booking', 'MembersController@storemembers')->name('members.storemembers');

// Route::post('/booking', 'MembersController@loginmembers')->name('members.loginmembers');

// Route::post('/booking', 'MembersController@loginmembers')->name('members.loginmembers');


// Route::post('/booking', 'MembersController@storemembers')->name('members.storemembers');















Route::group(
			['prefix' => 'admin','middleware' =>['auth']],
			function () {
            
                Route::get('dashboard', function () {
                    return view('backend.dashboard');
                        })->name('backend.dashboard');
                Route::resource('berita','BeritaController');
                Route::resource('kategoriproduk','KategoriprodukController');
                Route::resource('minuman','MinumanController');
                Route::resource('makanan','MakananController');
                Route::resource('beans','BeansController');
                Route::resource('members','MembersController');
                Route::resource('booking','BookingController');
                // Route::get('cetak_pdf', 'BookingController@cetak_pdf');
                // Route::get('booking/cetak_pdf', 'BookingController@cetak_pdf');
                Route::get('cetak_pdf', function () {
                    $booking = \App\Booking::get();
                   $pdf = PDF::loadView('backend.booking.booking_pdf',['booking'=>$booking]);
    	            return $pdf->download('laporan-booking-pdf');
                });
                Route::resource('review','ReviewController');
               
				
			}
        );
        

// Route::get('/back', function () {
//     return view('backend');
// });
// Route::get('/pesan','NotifController@index');
// Route::get('/pesan/sukses','NotifController@sukses');
// Route::get('/pesan/peringatan','NotifController@peringatan');
// Route::get('/pesan/gagal','NotifController@gagal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

