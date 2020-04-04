@extends('layouts.back')
@section('js')
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Tambah Makanan Baru</div>

            <div class="card-body">
                <form action="{{ route('makanan.update', $makanan->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Makanan</label>
                    <input class="form-control" value="{{ $makanan->makanan }}" type="text" name="makanan" required>
                </div>

               <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori_produks_id" class="form-control">
                            @foreach($kategori_produks as $data)
                            <option value="{{ $data->id }}" {{ ($data->id == $makanan->kategori_produks_id) ? 'selected' : ''}}>{{ $data->kategori_produks }}</option>
                            @endforeach
                        </select>
                    </div>
     
                 <div class="form-group">
                        <label for="">Deskripsi</label>
                       <textarea class="form-control" id="editor1" name="deskripsi" id="" cols="30" rows="10" required> {{ $makanan->deskripsi }}</textarea>
                </div>

                  <div class="form-group">
                    <label for="">Harga</label>
                    <input class="form-control" value="{{ $harga->harga }}" type="text" name="harga" required>
                </div>

                <div class="form-group">
                        <label for="">Foto</label>
                                <img width="100px" height="100px"
                                src ="{{asset('/assets/img/produk/'.
                                $makanan->foto.'') }}"
                                alt="foto">
                        </p>
                        
                        <input class="form-control" value="{{ $makanan->foto }}" type="file" name="foto" >
                        
                        
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
        </div>
    </div>
</div>
@endsection  
  
  
  
  
  
  
  