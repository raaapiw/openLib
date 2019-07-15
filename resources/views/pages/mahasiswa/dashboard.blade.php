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
                <h3 class="card-title">Top Review</h3>
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
