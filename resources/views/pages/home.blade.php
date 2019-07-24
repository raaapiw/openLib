@extends('layouts.app3')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<br>
<div class="row ">
    <div class="col-md-12">
        <center>
            <form action="{{ url()->current() }}">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="Search what you're going to review . . ."/>
                </div>
                <br>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">
                        search
                    </button>
                </div>
            </form>
        </center>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body collapse show">
                <h3 class="card-title">New Release</h3>
                <div class="row">
                    @foreach($realese as $row)
                    <div class="col-lg-2">
                        <a href="{{ route('detailCatalogue', $row->id)}}"><img src="{{asset('storage/files/cover/'.$row->cover)}}" width="120px" height="180px" alt=""></a>
                        <p align="center" style="color:black;"><b>{{$row->nama_buku}}</b></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
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
                <p align="center" style="color:black;"><b>{{$row->nama_buku}}</b><br>
                </p>
                <a href="" onclick="sweet()" class="btn btn-success">Vote</a>
                <br>
                <br>
                @endforeach
                <br>
            </div>
            </center>
        </div>
    </div>
</div>
<div class="row" style="margin-top:-650px; margin-bottom:200px">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Review</h4> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">
                <!-- Comment Row -->
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
                <!-- Comment Row -->
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Member of The Week</h4>
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <img class="card-img-top" src="{{ asset('material/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" /></div>
                    <h3 class="m-b-0">{{$user->name}}</h3>
                    <p>FRI - 1201150444</p>
                    <p>{{$user->reviews}} points, {{$user->reviews}} Review</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
<script>
function sweet (){
        swal("You Should Login first", "", "warning");
    }
</script>
@endsection
