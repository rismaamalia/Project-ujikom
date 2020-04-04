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
            <div class="card">
                <div class="card-header">Edit Members</div>

                <div class="card-body">
                <form action="{{ route('members.update', $members->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">username</label>
                    <input class="form-control" value="{{ $members->username }}" type="text" name="username" required>
                </div>

                   <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" value="{{ $members->email }}" type="email" name="email" required>
                </div>

                      <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" value="" type="password" name="password" required disabled>
                </div>

               
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