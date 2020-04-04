@extends('layouts.back')

@section('js')
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div clas="col-lg-12">
                <div class="card-header">Edit Booking</div>

                <div class="card-body">
                <form action="{{ route('booking.update', $booking->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}


                       <div class="form-group"> 
                        <label for="">Nama Pemesanan</label>
                        <input type="text" name="nama" value="{{ $booking->nama }}" id="" class="form-control" placeholder="Nama Pemesanan" aria-describedby="helpId">
                    </div>

                      <div class="form-group"> 
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ $booking->email }}" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
                    </div>

                       <div class="form-group"> 
                        <label for="">No Telp</label>
                        <input type="text" name="no_tlpn" value="{{ $booking->no_tlpn }}" id="" class="form-control" placeholder="No Telp" aria-describedby="helpId">
                    </div>

                     <div class="form-group"> 
                        <label for="">Tanggal Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" value="{{ $booking->tgl_pemesanan }}" id="" class="form-control" aria-describedby="helpId">
                    </div>

                      <div class="form-group"> 
                        <label for="">Waktu Pemesanan</label>
                        <input type="time" name="waktu" value="{{ $booking->waktu }}" id="waktu" class="form-control" aria-describedby="helpId">
                    </div>
                    
                      <div class="form-group"> 
                        <label for="">Banyak Kursi</label>
                        <input type="text" name="banyak_kursi" value="{{ $booking->banyak_kursi }}" id="" class="form-control" placeholder="Banyak Kursi" aria-describedby="helpId">
                    </div>

          
          
                
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Simpan Data
                    </button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection