@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($vote) ? 'Edit Vote': 'Tambah Vote Baru'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($vote) ? 'Edit Vote':'Tambah Vote Baru'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action={{ isset($vote) ? route('admin.vote.update', $vote->id) : route('admin.vote.store')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="recommend_id" value="{{ $vote->recommend->id}}">
                    <div class="form-body">
                        <h3 class="card-title">Informasi Buku</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="idPatient1">Judul Buku :</label>
                                <input type="text" class="form-control" disabled id="idPatient1" value="{{$vote->recommend->nama_buku}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1">Pengarang :</label>
                                    <input type="tel" class="form-control" disabled id="phoneNumber1" value="{{$vote->recommend->pengarang}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name1">Penerbit :</label>
                                <input type="text" class="form-control" disabled id="name1" value="{{$vote->recommend->penerbit}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address1">Tahun Terbit :</label>
                                    <input type="text" class="form-control" disabled id="address1" value="{{$vote->recommend->tahun_terbit}}">
                                </div>
                            </div>
                            <br>
                        </div>
                        <h3 class="box-title m-t-40">Informasi Tambahan</h3>
                        <hr>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Alasan voting buku</h4>
                                    <textarea rows="7" id="file" name="keterangan" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" value="upload"><i class="fa fa-check"></i> Submit</button>
                            <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
$( document ).ready(function() {
    $('.dropify').dropify();
});

</script>



@endsection
