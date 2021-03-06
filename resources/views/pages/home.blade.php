@extends('layouts.app3')

@section('style')
<style>
    .checked {
        color: orange;
      }
      .rating-stars ul {
      list-style-type:none;
      padding:0;

      -moz-user-select:none;
      -webkit-user-select:none;
    }
    .rating-stars ul > li.star {
      display:inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul > li.star > i.fa {
      font-size:2.5em; /* Change the size of the stars */
      color:#ccc; /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul > li.star.hover > i.fa {
      color:#FFCC36;
    }

    /* Selected state of the stars */
    .rating-stars ul > li.star.selected > i.fa {
      color:#FF912C;
    }
</style>
<style>
   modal.modal({ show:true, backdrop: false });
</style>
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<br>

<div class="row ">
    <div class="col-md-12">
        <center>
            <form action="{{ route('simpleSearch') }}">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="Search what you're going to review . . ."/>
                </div>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Advanced</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        search
                    </button>
            </form>
        </center>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Advanced Search</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('advancedSearch') }}" method="GET" id="myForm">
                    <div class="form-group">
                        <label class="control-label">Types:</label>
                        <select class="form-control custom-select" name="type">
                            <option disabled value="">Choose the type of item</option>
                            <option value="1">Article - Restricted Use</option>
                            <option value="2">Bahan Ajar</option>
                            <option value="3">Books - Circulation</option>
                            <option value="4">Books - Reference</option>
                            <option value="5">Books - Restricted Use</option>
                            <option value="6">Case Studies</option>
                            <option value="7">CD/DVD</option>
                            <option value="8">Dissertation</option>
                            <option value="9">E-Article</option>
                            <option value="10">International Journal</option>
                            <option value="11">National Journal</option>
                            <option value="12">Scientific Work - Skripsi</option>
                            <option value="13">Scientific Work - TA</option>
                            <option value="14">Scientific Work - Thesis</option>
                            <option value="15">Magazine</option>
                            <option value="16">Practicum Module</option>
                            <option value="17">Proceeding</option>
                            <option value="18">Research Report</option>
                            <option value="19">Teaching Note</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="code" class="control-label">Code:</label>
                        <input type="text" name="nama_buku" class="form-control" id="code">
                    </div>
                    <div class="form-group">
                        <label for="title" class="control-label">Title:</label>
                        <input type="text" name="nama_buku" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="author" class="control-label">Author:</label>
                        <input type="text" name="pengarang" class="form-control" id="author">
                    </div>
                    <div class="form-group">
                        <label for="publisher" class="control-label">Publisher:</label>
                        <input type="text" name="penerbit" class="form-control" id="publisher">
                    </div>
                    <div class="form-group">
                        <label for="editor" class="control-label">Editor:</label>
                        <input type="text" name="editor" class="form-control" id="editor">
                    </div>
                    <div class="form-action">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="myFunction()" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
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
                <h3 class="card-title">Winner Book</h3>
            </div>
            <div class="col-sm-8">
                @if(@isset($winner->cover))
                    <a href=""><img src="{{asset('storage/files/cover/'.$winner->cover)}}" width="120px" height="180px" alt=""></a>
                    <p align="center" style="color:black;"><b>{{$winner->nama_buku}}</b></p>
                    <br>
                    <br>
                @else
                @endif
            </div>
            </center>
        </div>
    </div>
</div>
<div class="row">
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
                        @if($row->user->gender == 'M')
                        <div class="p-2"><img src="{{ asset('material/images/users/male.png')}}" alt="user" width="50"></div>
                        @else
                        <div class="pro-img"><img src="{{ asset('material/images/users/female.png')}}" alt="user" width="50"/></div>
                        @endif
                        <div class="comment-text w-100">
                            <p style="color: black;"><b>{{$row->user->name}}</b> for <b><u>{{$row->book->nama_buku}}</u></b></p>
                            <p style="color: black;">"{{$row->keterangan}}" &nbsp;&nbsp;&nbsp;
                                @if($row->rating >= 0 && $row->rating<1)
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                @elseif($row->rating >= 1 && $row->rating<2)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                @elseif($row->rating >= 2 && $row->rating<3)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                @elseif($row->rating >= 3 && $row->rating<4)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                @elseif($row->rating >= 4 && $row->rating<5)
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
                            </p>
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
                <h4 class="card-title">Winner of the last Event</h4>
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <img class="card-img-top" src="{{ asset('material/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div id="myModal1" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="row">
                                    <div class="col-md-3"><img src="{{ asset('material/images/mission/success.png')}}" width="105px" alt=""></div>
                                    <div class="col-md-9"><h3 style="font-weight: bold;">Congratulations!</h3> <p align="justify">{{$user->name}} ({{$user->nim}}), the winner of the’elanor and park’ book in our last event please go to our staf to claim your prize!</p></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="card-body little-profile text-center">
                    @if($user->gender == 'M')
                    <div class="pro-img"><img src="{{ asset('material/images/users/male.png')}}" alt="default" data-toggle="modal" data-target="#myModal1"></div>
                    @else
                    <div class="pro-img"><img src="{{ asset('material/images/users/female.png')}}" alt="default" data-toggle="modal" data-target="#myModal1" /></div>
                    @endif
                    <h3 class="m-b-0">{{$user->name}}</h3>
                    <p><center>{{$user->faculty}} - {{$user->nim}}</center></p>
                    <p>{{$user->points}} points, {{$user->reviews}} Review</p>
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
                <a href="#" onclick="sweet()" class="btn btn-success">Vote</a>
                <br>
                <br>
                @endforeach
                <br>
            </div>
            </center>
        </div>
    </div>
</div>
{{-- <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button> <br><br><br>
                <p align=" center"><img src="{{ asset('material/images/console.png')}}" width="100px"></p>
                    <p align=" center" style="color:black;font-size:160%;"><b>Finish your mission, and get free books</b></p>
                    <p align=" center"><button type="button" class="btn btn-warning" data-dismiss="modal">Close</button></p>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@section('script')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
<script>
    function myFunction() {
        document.getElementById("myForm").submit();
    }
</script>
<script>
function sweet (){
        swal.fire("You Should Login first", "", "warning");
    }
</script>
@endsection
