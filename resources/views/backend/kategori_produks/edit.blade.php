@extends('layouts.back')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Edit Kategori Produk</div>

                <div class="card-body">
                   <form action="{{ route('kategoriproduk.update', $kategori_produks->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kategori Produks</label>
                    <input class="form-control" value="{{ $kategori_produks->kategori_produks }}" type="text" name="kategori_produks" required>
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

     