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
        <a href=""><img src="{{asset('storage/files/cover/'.$book->cover)}}" alt=""></a>
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
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Review</h4> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">
                <!-- Comment Row -->
                <form action="{{ route('mahasiswa.review.store')}}" method="POST" enctype="multipart/form-data">
                    @foreach($reviews as $key=>$row)
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" width="50"></div>
                            <div class="comment-text w-100">
                                <p style="color: black;"><b>{{$row->user->name}}</b> for <b><u>{{$row->book->nama_buku}}</u></b></p>
                                <p style="color: black;">"{{$row->keterangan}}"</p>
                                <p class="m-b-5">{{$row->review}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex flex-row comment-row">
                        <input type="hidden" name="book_id" value="{{$book->id}}">
                        <div class="p-2"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" width="50"></div>
                        <div class="comment-text w-100">
                            <p style="color: black;"><b>{{ Sentinel::getUser()->name }}</b></p>
                            <input type="text" name="subject" id="firstName" class="form-control" placeholder="Subject"><br><br>
                            <textarea name="review" id="" rows="10" class="form-control" placeholder="Write your review here..."></textarea>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-warning" value="upload"> Submit</button>
                            </div>
                        </div>
                    </div>
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
{{-- <div class="card">
    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <a href="#" class="btn btn-warning">Review</a>
    </div>
</div> --}}
