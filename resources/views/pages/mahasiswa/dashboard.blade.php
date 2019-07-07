@extends('layouts.app')

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>BUKU FAVOURITE</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img1.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img1.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img1.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{asset('material/images/big/img1.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="card card-outline-info">
            <div class="card-body">
                <center>
                    <b><h1>LEADERBOARD</h1></b> <br>
                    <img src="{{asset('material/images/podium.png')}}" alt=""height="200px" width="200px">
                    <br>
                </center>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table red-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nigga</td>
                                <td>FEB</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Deshmukh</td>
                                <td>Prohaska</td>
                                <td>@Genelia</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Roshan</td>
                                <td>Rogahn</td>
                                <td>@Hritik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
