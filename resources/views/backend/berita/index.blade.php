@extends('layouts.back')
@section('content')
@section('js')
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="card-header">berita</div>
                <div class="card-body">
                <br>
                    <center> <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"><i class="nc-icon nc-simple-add"></i></a>
                    </center>
                <br>

                <div class="table" >
                     <table class="table" id="table_id">
                     <thead  class="thead thead-dark">
                       <tr>
                           <th>No</th>
                           <th>Judul</th>
                           <th>Slug</th>
                           <th>Penulis</th>
                           <th>Foto</th>

                           <th>Aksi</th>
                       </tr>
                       </thead>
                       <tbody>
                       @php $no =1; @endphp
                       @foreach ($berita as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>

                            
                                    <img width="100px" height="100px" 
                                     src ="{{asset('assets/img/berita/'.
                                     $data->foto.'') }}" alt="foto">
                                     </td>
                                     <td>
                                <a href="{{ route('berita.edit',$data->id) }}" class ="btn btn-sm btn-success" class="icon_check_alt2" ><i class="nc-icon nc-refresh-69"></i>
                                             </a>
                                <form action="{{ route('berita.destroy',$data->id) }}" method="post">
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
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label for="">Judul</label>
                        <input type="text" name="judul" id="" class="form-control" placeholder="Judul" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label>Konten</label>
                        <textarea class="ckeditor" id="editor1" name="konten" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                            <label for="">Foto</label>
                            <input class="form-control" name="foto" type="file"  required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info" onclick="demo.showNotification('top','right')">
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