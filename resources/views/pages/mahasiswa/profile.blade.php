@extends('layouts.app2')

@section('style')
<style>

.table {border: none;}

</style>
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<h1 style="font-size:35px">{{Sentinel::getUser()->name}}</h1>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <img class="card-img-top" src="{{ asset('material/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="{{ asset(Sentinel::getUser()->image) }}" alt="user" /></div>
                    <h3 class="m-b-0">{{$user->name}}</h3>
                    <p><center>{{$user->faculty}}</center></p>
                    <p>{{$user->points}} points, {{$user->reviews}} Review</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body collapse show">
                <div class="table-responsive">
                    <h2>Your Reviews</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th></th>
                                <th style="width:50%"><center>Reviews Details</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $key=>$row)
                                <tr>
                                    <td><center>{{$key+1}}</center></td>
                                    <td>
                                        @if(isset($row->book->cover))
                                            <a href=""><img src="{{asset('storage/files/cover/'.$row->book->cover)}}" width="120px" height="180px" alt=""></a>
                                        @else

                                        @endif
                                    </td>
                                    <td>
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-9 col-xs-12">
                                                        <p align="justify" style="color:black;">
                                                            <b>{{$row->book->nama_buku}}</b><br>
                                                            {{-- "bintang"<br> --}}
                                                            <img src="{{asset('material/images/author.png')}}" alt="">&nbsp;&nbsp;{{$row->book->pengarang}}<br>
                                                            "{{$row->keterangan}}"
                                                            <br>
                                                            {{$row->review}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><center>{{$row->votes}}</center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
