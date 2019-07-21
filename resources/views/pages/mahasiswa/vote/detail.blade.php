@extends('layouts.app2')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection
{{-- @section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
@endsection --}}

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3">
        <form action="{{ route('mahasiswa.vote.store')}}" method="POST" enctype="multipart/form-data">
        <center>
            <input type="hidden" name="book_id" value="{{$book->id}}">
            <a href=""><img src="{{asset('storage/files/cover/'.$book->cover)}}" alt=""></a>
            <br>
            <br>
            <div class="form-actions">
                <button type="submit" class="btn btn-success" value="upload"><i class="fa fa-check"></i> Vote</button>
                <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Cancel</a>
            </div>
        </center>
        </form>
    </div>
    <div class="col-lg-6">
        <h1>{{$book->nama_buku}}</h1>
        <p align="justify" style="color:black;">
            <img src="{{asset('material/images/author.png')}}" alt=""> {{$book->pengarang}}&nbsp;&nbsp;<img src="{{asset('material/images/publisher.png')}}" alt="">{{$book->penerbit}} <br>
            bintang&nbsp;&nbsp;<img src="{{asset('material/images/review.png')}}" alt=""> <br>
            <b>Synopsis:</b><br>
            {{$book->synopsis}}
        </p>
    </div>
    <div class="col-lg-3 col-md-5">
        <div class="card">
            <center>
            <div class="card-body">
                <h3 class="card-title">Top Vote</h3>
            </div>
            <div class="col-sm-8">
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
            </div>
            </center>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
{{-- <div class="card">
    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <a href="#" class="btn btn-warning">Review</a>
    </div>
</div> --}}
