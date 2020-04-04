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
        <div class="col-lg-12">
                <div class="card-header">review</div>
                <div class="card-body">
                <br>
                    <center> <a href=" " data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-primary"><i class="nc-icon nc-simple-add"></i></a>
                    </center>
                <br>

                <div class="table">
                    <table class="table" id="table_id">
                     <thead  class="thead thead-dark">
                       <tr>
                           <th>No</th>
                           <th>Penulis</th>
                            <th>Review</th>
                           <th>Foto</th>

                           <th>Aksi</th>
                       </tr>
                       </thead>
                       <tbody>
                       @php $no =1; @endphp
                       @foreach ($review as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->penulis }}</td>
                            <td>{{ $data->review }}</td>
                            <td>

                            
                                    <img width="100px" height="100px" 
                                     src ="{{asset('assets/img/review/'.
                                     $data->foto.'') }}" alt="foto">
                                </td>
                            
                            <td>
                                <a href="{{ route('review.edit',$data->id) }}" class="btn btn-sm btn-success" class="icon_check_alt2"><i class="nc-icon nc-refresh-69"></i></a>
                                <form action="{{ route('review.destroy',$data->id) }}" method="post">
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
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="{{ route('review.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label for="">Penulis</label>
                        <input type="text" name="penulis" id="" class="form-control" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label>review</label>
                        <textarea class="ckeditor" id="editor1" name="review" rows="5"></textarea>
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