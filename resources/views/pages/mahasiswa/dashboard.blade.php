@extends('layouts.app2')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<br>
<div class="row ">
    <div class="col-md-12">
        <center>
            <form action="{{ route('mahasiswa.simpleSearch') }}">
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
                <form action="{{ route('mahasiswa.advancedSearch') }}" method="GET" id="myForm">
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
                        <a href="{{ route('mahasiswa.review.detail', $row->id)}}"><img src="{{asset('storage/files/cover/'.$row->cover)}}" width="120px" height="180px" alt=""></a>
                        <p align="center" style="color:black;"><b>{{$row->nama_buku}}</b></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
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
                <p align="center" style="color:black;"><b>{{$row->nama_buku}}</b><br><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></p>
                <br>
                @endforeach
                <br>
            </div>
            </center>
        </div>
    </div>
</div>
{{-- <div class="row" style="margin-top:-650px; margin-bottom:200px">
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
                    <p>{{$user->reviews * 10}} points, {{$user->reviews}} Review</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
