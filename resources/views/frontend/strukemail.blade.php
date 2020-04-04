@extends('layouts.app')
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
                <div class="card-header">Pesanan</div>

              

                    <div class="form-group"> 
                     Nama
                     Pesanan
                     
                      
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