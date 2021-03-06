@extends('layouts.back')
@section('js')
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="card-header">Makanan</div>
                <div class="card-body">
                <br>
                    <center> <a href=""  data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-primary"><i class="nc-icon nc-simple-add"></i></a>
                    </center>
                <br>

                <div class="table" >
                     <table class="table" id="table_id">
                      <thead  class="thead thead-dark">
                       <tr>
                           <th>No</th>
                           <th>Nama Makanan</th>
                           <th>Kategori Produk</th>
                           <th>Deskripsi</th>
                            <th>Harga</th>
                           <th>Foto</th>
                           <th>Aksi</th>
                       </tr>
                       </thead>
                       <tbody>
                       @php $no =1; @endphp
                       @foreach ($makanan as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->makanan }}</td>
                            <td>{{ $data->kategori_produks->kategori_produks }}</td>
                            <td>{{ $data->deskripsi }}</td>
                             <td>{{ $data->harga }}</td>
                            <td>

                            
                                    <img width="100px" height="100px" 
                                     src ="{{asset('assets/img/makanan/'.
                                     $data->foto.'') }}" alt="foto">
                                </td>
                            
                            <td>
                                <a href="{{ route('makanan.edit',$data->id) }}" class="btn btn-sm btn-success"><i class="nc-icon nc-refresh-69"></i> </a>
                         
                                <form action="{{ route('makanan.destroy',$data->id) }}" method="post">
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
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Makanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('makanan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label for="">Makanan</label>
                        <input type="text" name="makanan" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori_produks_id" class="form-control">
                            @foreach($kategori_produks as $data)
                                <option value="{{ $data->id }}">{{ $data->kategori_produks }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="ckeditor" id="editor1" name="deskripsi" rows="5"></textarea>
                    </div>

                        <div class="form-group"> 
                        <label for="">Harga</label>
                        <input type="text" name="harga" id="" class="form-control"  aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                            <label for="">Foto</label>
                            <input class="form-control" name="foto" type="file"  required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                        </button>
                    </div>
                </form>
</div>
@endsection