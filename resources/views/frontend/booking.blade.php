<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Titik Temu</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/members/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/members/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" style="width:800px; height:700px;"src="assets/frontend/img/logo.jpg" alt="Booking Image">
                </div>
                 <div class="booking-form">
                    <form action="{{ route('booking.frontend') }}" id="booking-form" method="post">
                    @csrf
                        <h2>Booking TempatMu!</h2>
                        <div class="form-group form-input">
                            <input type="text" name="nama" id="name" value="" required/>
                            <label for="name" class="form-label">Nama</label>
                        </div>
                          <div class="form-group form-input">
                            <input type="text" name="email" id="email" value="" required/>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="no_tlpn" id="phone" value="" required />
                            <label for="phone" class="form-label">No Tlpn</label>
                        </div>
                            <div class="form-group form-input">
                             <label for="">Tanggal Pemesanan</label>
                           <input type="date" name="tgl_pemesanan" id="date" value="" required />
                        </div>
                        <div class="form-group form-input">
                             <label for="">Waktu Pemesanan</label>
                           <input type="time" name="waktu" value="" required />
                        </div>
                        
                        {{-- <div class="form-group">
                            <div class="select-list">
                                <select name="waktu" id="time" required>
                                    <option value="">Waktu</option>
                                    <option value="6pm">6:00 PM</option>
                                    <option value="7pm">7:00 PM</option>
                                </select>
                            </div>
                        </div> --}}
                       
                        <div class="form-radio">
                            <label class="label-radio"> Pilih Ruang Makan Anda</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="banyak_kursi" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="banyak_kursi" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="banyak_kursi" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="banyak_kursi" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="banyak_kursi" value="10" id="number_people_10" />
                                    <label for="number_people_10">10</label>
                                </span>
                            </div>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Pesan Sekarang" class="submit" id="submit" name="submit" />
                            <a href="" class="vertify-booking">Verifikasi Pesananmu melalui Email</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="assets/members/vendor/jquery/jquery.min.js"></script>
    <script src="assets/members/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>