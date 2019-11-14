@extends('layouts.app3')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection
<style>
        .checked {
            color: orange;
          }
</style>
@section('content')
<div class="row">
    <div class="col-lg-3">
        <a href=""><img src="{{asset('storage/files/cover/'.$book->cover)}}" alt=""></a>
    </div>
    <div class="col-lg-9">
        <h1>{{$book->nama_buku}}</h1>
        <p align="justify" style="color:black;">
            <img src="{{asset('material/images/author.png')}}" alt=""> {{$book->pengarang}}&nbsp;&nbsp;<img src="{{asset('material/images/publisher.png')}}" alt="">&nbsp;&nbsp;{{$book->penerbit}} <br>
            @if($rating >= 0 && $rating<1)
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            @elseif($rating >= 1 && $rating<2)
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            @elseif($rating >= 2 && $rating<3)
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            @elseif($rating >= 3 && $rating<4)
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            @elseif($rating >= 4 && $rating<5)
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            @else
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            @endif
            &nbsp;&nbsp;<img src="{{asset('material/images/review.png')}}" alt="">&nbsp;{{$book->reviews}} people review this book <br>
            <b>Synopsis:</b><br>
            {{$book->synopsis}}
        </p>
    </div>
</div>
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <div class="card" style="border-style: solid; border-width: 5px; background-color:#E2DCC4">
            <div class="card-body" >
                <h3 class="card-title">Review</h3> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="">
                <!-- Comment Row -->
                <form action="" method="POST" enctype="multipart/form-data">
                    @foreach($reviews as $key=>$row)
                        <div class="d-flex flex-row comment-row">
                            @if($row->user->gender == 'M')
                            <div class="p-2"><img src="{{ asset('material/images/users/male.png')}}" alt="user" width="50"></div>
                            @else
                            <div class="pro-img"><img src="{{ asset('material/images/users/female.png')}}" alt="user" /></div>
                            @endif
                            <div class="comment-text w-100">
                                <p style="color: black;"><b>{{$row->user->name}}</b> for <b><u>{{$row->book->nama_buku}}</u></b></p>
                                <p style="color: black;">"{{$row->keterangan}}"</p>
                                <p class="m-b-5" style="color: black;">{{$row->review}}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
