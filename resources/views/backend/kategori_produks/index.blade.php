@extends('layouts.back')
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header">Kategori Produk</div>
                <div class="card-body">
                <br>
                    <center> <a href="" data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-primary"><i class="nc-icon nc-simple-add"></i></a>
                    </center>
                <br>

                <div class="table">
                   <table class="table" id="table_id">
                     <thead  class="thead thead-dark">
                       <tr>
                           <th>No</th>
                           <th>Kategori Produk</th>

                           <th>Aksi</th>
                       </tr>
                       </thead>
                       <tbody>
                       @php $no =1; @endphp
                       @foreach ($kategori_produks as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->kategori_produks }}</td>
                           
                            
                            <td>
                                <a href="{{ route('kategoriproduk.edit',$data->id) }}" class="btn btn-sm btn-success"><i class="nc-icon nc-refresh-69"></i></a>
                                <form action="{{ route('kategoriproduk.destroy',$data->id) }}" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                          <form action="{{ route('kategoriproduk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label for="">Kategori Produk</label>
                        <input type="text" name="kategori_produks" id="" class="form-control"  aria-describedby="helpId">
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