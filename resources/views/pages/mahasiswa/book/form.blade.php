@extends('layouts.app2')

@section('style')
<link href="{{ asset('material/plugins/wizard/steps.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-8">
        <h1>Add New Book</h1>
        <br>
        <form action="{{ route('mahasiswa.book.store')}}" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title :</label><br>
                    <input  type="text" class="form-control" id="tempat" name="title" >
                </div>
                <div class="form-group">
                    <label>Author :</label><br>
                    <input  type="text" class="form-control" id="tempat" name="author" >
                </div>
                <div class="form-group">
                    <label>Publisher :</label><br>
                    <input  type="text" class="form-control" id="tempat" name="publisher" >
                </div>
                <div class="form-group">
                    <label>Synopsis :</label><br>
                    <textarea class="form-control" id="tempat" name="synopsis" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Cover :</label><br>
                    <input  type="file" id="input-file-now-custom-1" class="dropify" id="tempat" name="cover" >
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success" value="upload"><i class="fa fa-check"></i> Submit</button>
                    <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Cancel</a>
                </div>
                <br>
            </div>
        </div>
        </form>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('material/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/jquery.steps.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/jquery.validate.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/steps.js')}}"></script>

<script src="{{ asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
$( document ).ready(function() {
    $('.dropify').dropify();
});

</script>



@endsection
