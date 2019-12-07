@extends('layouts.app2')

@section('style')
<style>
.checked {
    color: orange;
  }
.table {border: none;}

</style>
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<center>
<h1 style="font-size:35px; color:black;">Welcome, {{Sentinel::getUser()->name}}</h1>
<div class="row justify-content-center">
    <div class="col-lg-8">
            <img src="{{ asset(Sentinel::getUser()->image)}}" width="250px" /> <br><br>
            <h3 class="m-b-0" style="color:black;">{{$user->name}}</h3>
            <hr width="60%" style="border: 1.5px solid black;">
            <p style="color:black;">{{$user->faculty}} - {{$user->nim}}</p>
            <p style="color:black;"> <img src="{{ asset('material/images/mission/target.png')}}" width="20px"> 4 mission &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="{{ asset('material/images/mission/review.png')}}" width="20px"> {{$user->reviews}} reviews &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="{{ asset('material/images/mission/successs.png')}}" width="20px"> {{$user->points}} points
            </p>
        <div class="card">
            <div class="card-body">
                <center><h4 style="color:black;">Mission</h4></center>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:15%"></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('material/images/mission/mission.jpg')}}" width="120px" height="180px" alt=""></td>
                                    <td>
                                        <h3 style="font-weight: bold"">Review some book as many as posible, and win 'Elanor & Park' by Raibow Rowell!</h3>
                                        <p><img src="{{ asset('material/images/mission/treasure.png')}}" width="20px" alt=""> 'Elanor & Park' by Raibow Rowell</p>
                                        <p><img src="{{ asset('material/images/mission/deadline.png')}}" width="20px" alt=""> 25 December 2019</p>
                                        <p><b style="color:black;">Rules:</b> <br> Review some books as many as possiblebefore due date. Winner will be choosen by the amount of book that have been reviewedand the quality of review itself.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                {{-- <img class="card-img-top" src="{{ asset('material/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="{{ asset(Sentinel::getUser()->image) }}" alt="user" /></div>
                    <h3 class="m-b-0">{{$user->name}}</h3>
                    <p><center>{{$user->faculty}}</center></p>
                    <p> <img src="{{ asset('material/images/mission/target.png')}}" width="20px"> 4 mission
                        <img src="{{ asset('material/images/mission/review.png')}}" width="20px"> {{$user->reviews}} reviews
                        <img src="{{ asset('material/images/mission/successs.png')}}" width="20px"> {{$user->points}} points
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-8">
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
                                                            @if ($row->reviews == 0)
                                                                {{$rating = 0}}

                                                            @else
                                                                {{$rating = $row->rating/$row->reviews}}

                                                            @endif
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
    </div> --}}
</div>
</center>
@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
