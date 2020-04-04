@extends('layouts.backend')

@section('js')
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div clas="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Berita</div>

                <div class="card-body">
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
                        <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                        </button>
                    </div>
                </form>