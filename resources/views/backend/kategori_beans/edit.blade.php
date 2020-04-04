@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kategori Beans</div>

                <div class="card-body">
                   <form action="{{ route('kategoribeans.update', $kategori_beans->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Kategori Beans</label>
                    <input class="form-control" value="{{ $kategori_beans->kategori_beans }}" type="text" name="kategori_beans" required>
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

     