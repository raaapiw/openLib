@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($recommend) ? 'Edit Rekomendasi Buku': 'Tambah Rekomendasi Buku'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($recommend) ? 'Edit Rekomendasi Buku':'Tambah Rekomendasi Buku'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ isset($recommend) ? route('admin.recommend.update', $recommend->id) : route('admin.recommend.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <h3 class="card-title">Rekomendasi Buku Baru</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="idPatient1">Judul buku :</label>
                                    @if(isset($recommend))
                                        <input type="text" class="form-control" id="input" name="nama_buku" placeholder="{{$recommend->nama_buku}}">
                                    @else
                                        <input type="text" class="form-control" id="input" name="nama_buku">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    @if(isset($recommend))
                                    <input type="text" class="form-control" id="waktu" name="penerbit" value="{{$recommend->time}}">
                                    @else
                                    <input type="text" class="form-control" id="waktu" name="penerbit" >
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    @if(isset($recommend))
                                        <input type="pengarang" class="form-control" id="input" name="pengarang" placeholder="{{$recommend->date}}">
                                    @else
                                        <input type="pengarang" class="form-control" id="input" name="pengarang">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penyunting</label>
                                    @if(isset($recommend))
                                        <input type="text" class="form-control" id="tempat" name="penyunting" value="{{$recommend->place}}">
                                    @else
                                        <input type="text" class="form-control" id="tempat" name="penyunting">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerjemah</label>
                                    @if(isset($recommend))
                                        <input type="text" class="form-control" id="tempat" name="penerjemah" value="{{$recommend->place}}">
                                    @else
                                        <input type="text" class="form-control" id="tempat" name="penerjemah">
                                    @endif
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    @if(isset($recommend))
                                        <input type="number" class="form-control" id="tempat" name="tahun_terbit" value="{{$recommend->place}}">
                                    @else
                                        <input type="number" class="form-control" id="tempat" name="tahun_terbit">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kota Terbit</label>
                                    @if(isset($recommend))
                                        <input type="text" class="form-control" id="tempat" name="kota_terbit" value="{{$recommend->place}}">
                                    @else
                                        <input type="text" class="form-control" id="tempat" name="kota_terbit">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Buku</label>
                                    @if(isset($recommend))
                                        <input type="text" class="form-control" id="tempat" name="jenis" value="{{$recommend->place}}">
                                    @else
                                        <input type="text" class="form-control" id="tempat" name="jenis">
                                    @endif
                                </div>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Abstrak</label>
                                    @if(isset($recommend))
                                        <input type="textarea" class="form-control" id="tempat" name="abstrak" value="{{$recommend->place}}">
                                    @else
                                        <input type="textarea" class="form-control" id="tempat" name="abstrak">
                                    @endif
                                </div>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Foto Cover Buku</h4>
                                        <input type="file" id="input-file-now" class="dropify" name="cover" />
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-danger" value="upload"><i class="fa fa-check"></i> Submit</button>
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
