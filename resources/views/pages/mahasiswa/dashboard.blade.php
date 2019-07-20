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
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <a href="#" class="btn btn-warning">Review</a>
                            </div>
                        </div>
                    </div>
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
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <a href="#" class="btn btn-success">Vote</a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <a href="#" class="btn btn-success">Vote</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <a href="#" class="btn btn-success">Vote</a>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>
</div>
<div class="row" style="margin-top:-510px;">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Review</h4> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" width="50"></div>
                    <div class="comment-text w-100">
                        <p style="color: black;"><b>Kim Do Young</b> for <b><u>Ask Again, Yes</u></b></p>
                        <p style="color: black;">"Light but Deep"</p>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class=""> <a href="{{ route('mahasiswa.review.index')}}"> <span class="text-muted pull-right"><u style="color: black;">Read More...</u></span></a></div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>James Anderson</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class=""> <a href="{{ route('mahasiswa.review.index')}}"> <span class="text-muted pull-right"><u>Read More...</u></span></a></div>
                    </div>
                </div>
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
                    <h3 class="m-b-0">Kim Do Young</h3>
                    <p>FRI - 1201150444</p>
                    <p>1500 points, 127 Review</p>
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
