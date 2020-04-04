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
        <div clas="col-md-8">
            <div class="card">
                <div class="card-header">Edit Review</div>

                <div class="card-body">
                <form action="{{ route('review.update', $review->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Penulis</label>
                    <input class="form-control" value="{{ $review->penulis }}" type="text" name="penulis" required>
                </div>

                <div class="form-group">
                        <label for="">Review</label>
                       <textarea class="form-control" id="editor1" name="review" id="" cols="30" rows="10" required> {{ $review->review }}</textarea>

                <div class="form-group">
                        <label for="">Foto</label>
                                <img width="100px" height="100px"
                                src ="{{asset('/assets/img/review/'.
                                $review->foto.'') }}"
                                alt="foto">
                        </p>
                        <input class="form-control" value="{{ $review->foto }}" type="file" name="foto" >
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
@endsection