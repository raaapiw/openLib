@extends('layouts.app2')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
<style>
.checked {
    color: orange;
  }
  </style>
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
            <a href=""><img src="{{asset('storage/files/cover/'.$book->cover)}}" alt="" width="240px" height="360px"></a>
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
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            &nbsp;&nbsp;<img src="{{asset('material/images/review.png')}}" alt=""> <br>
            <b>Synopsis:</b><br>
        </p>
        <div class="card" style="background-color:#E2DCC4">
            <p align="justify" style="color:black;">{{$book->synopsis}}</p>
        </div>
    </div>
    <div class="col-lg-3 ">
        <div class="card">
            <center>
            <div class="card-body">
                <h3 class="card-title">Top Vote</h3>
            </div>
            <div class="col-sm-8">
                @foreach($books as $key=>$row)
                <a href=""><img src="{{asset('storage/files/cover/'.$row->cover)}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>{{$row->nama_buku}}</b></p>
                <br>
                @endforeach
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
