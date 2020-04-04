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
        <div clas="col-md-12">

                <div class="card-header">Edit Berita</div>

                <div class="card-body">
                <form action="{{ route('berita.update', $berita->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control" value="{{ $berita->judul }}" type="text" name="judul" required>
                </div>

                <div class="form-group">
                        <label for="">Konten</label>
                       <textarea class="form-control" id="editor1" name="konten" id="" cols="30" rows="10" required> {{ $berita->konten }}</textarea>

                <div class="form-group">
                        <label for="">Foto</label>
                                <img width="100px" height="100px"
                                src ="{{asset('/assets/img/berita/'.
                                $berita->foto.'') }}"
                                alt="foto">
                        </p>
                        <input class="form-control" value="{{ $berita->foto }}" type="file" name="foto" >
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