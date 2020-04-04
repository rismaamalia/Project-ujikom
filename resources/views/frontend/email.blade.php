<div class="container">
    <div class="row justify-content-center">
        <div clas="col-lg-12">
                <div class="card-header">Verifikasi Pemesanan Tempat anda di Titik Temu Coffee </div>

                <div class="card-body">
                  <form action="{{ route('verifikasi.booking') }}" method="post">
                  @csrf


                       <div class="form-group"> 
                        <label for="">Nama Pemesanan</label>
                        <input type="text" name="nama" value="{{ $data->nama }}" id="" class="form-control" aria-describedby="helpId" readonly>
                    </div>

                      <div class="form-group"> 
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ $data->email }}" id="" class="form-control"  aria-describedby="helpId" readonly>
                    </div>

                       <div class="form-group"> 
                        <label for="">No Telp</label>
                        <input type="text" name="no_tlpn" value="{{ $data->no_tlpn }}" id="" class="form-control" aria-describedby="helpId" readonly>
                    </div>

                     <div class="form-group"> 
                        <label for="">Tanggal Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" value="{{ $data->tgl_pemesanan }}" id="" class="form-control" aria-describedby="helpId" readonly>
                    </div>

                      <div class="form-group"> 
                        <label for="">Waktu Pemesanan</label>
                        <input type="time" name="waktu" value="{{ $data->waktu }}" id="waktu" class="form-control" aria-describedby="helpId" readonly>
                    </div>
                    
                      <div class="form-group"> 
                        <label for="">Banyak Kursi</label>
                        <input type="text" name="banyak_kursi" value="{{ $data->banyak_kursi }}" id="" class="form-control"  aria-describedby="helpId" readonly>
                    </div>

          
          
                
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                       Verifikasi
                    </button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- 
<h3>Verifikasi Pemesanan Tempat anda di Titik Temu Coffee</h3> 
<p> Atas Nama: {{ $data->nama }}</p>
<p> Email : {{ $data->email }}</p>
<p>No Tlpn : {{ $data->no_tlpn }}</p>
<p>Tanggal Pemesanan : {{ $data->tgl_pemesanan }}</p>
<p>Waktu Pemesanan : {{ $data->waktu }}</p>
<p>Banyak Kursi : {{ $data->banyak_kursi }}</p>

<p>*Klik Verifikasi untuk Membuat Pesanan </p>
  <form action="" method="post">
                        @csrf
                          <button type="submit" class="form-submit">
                            VERIFIKASI
                        </button>
                        </form>
                       

<p>*Screenshoot Email ini sebagai tanda Pemesanan Tempat di Titik Temu</p> 

  --}}
