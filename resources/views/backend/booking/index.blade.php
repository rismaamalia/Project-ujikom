@extends('layouts.back')
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="card-header">Booking</div>
                <div class="card-body">
            
		<table class='table table-bordered'>
                    <center><a href="cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a><br>
                    <a href="" data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-primary"><i class="nc-icon nc-simple-add"></i></a>
                    </center>
                <br>

                <div class="table" >
                   <table class="table" id="table_id">
                     <thead  class="thead thead-dark">
                       <tr>
                           <th>No</th>
                           <th>Nama Pemesan</th>
                           <th>Email</th>
                           <th>No Tlpn</th>
                           <th>Tanggal Pemesan</th>
                           <th>Waktu Pemesanan</th>
                           <th>Banyak Kursi</th>
                           <th>Aksi</th>
                       </tr>
                        </thead>
                       <tbody>
                       @php $no =1; @endphp
                       @foreach ($booking as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_tlpn }}</td>
                            <td>{{ $data->tgl_pemesanan}}</td>
                            <td>{{ $data->waktu}}</td>
                            <td>{{ $data->banyak_kursi}}</td>
                            

                            
                            <td>
                                <a href="{{ route('booking.edit',$data->id) }}" class="btn btn-sm btn-success"><i class="nc-icon nc-refresh-69"></i></a>
                         
                                <form action="{{ route('booking.destroy',$data->id) }}" method="post">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="nc-icon nc-simple-delete"></i></button>
                                </form>
                            </td>
                        </tr>                      
                        @endforeach
                          </tbody>
                    </table>
                            
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label for="">Nama Pemesanan</label>
                        <input type="text" name="nama" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                      <div class="form-group"> 
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                       <div class="form-group"> 
                        <label for="">No Telp</label>
                        <input type="text" name="no_tlpn" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                     <div class="form-group"> 
                        <label for="">Tanggal Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" id="" class="form-control" aria-describedby="helpId">
                    </div>

                      <div class="form-group"> 
                        <label for="">Waktu Pemesanan</label>
                        <input type="time" name="waktu" id="waktu" class="form-control" aria-describedby="helpId">
                    </div>
                    
                      <div class="form-group"> 
                        <label for="">Banyak Kursi</label>
                        <input type="text" name="banyak_kursi" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                        </button>
                    </div>
                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

@endsection