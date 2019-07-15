@extends('layouts.app2')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
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
                                <td>FIT</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Roshan</td>
                                <td>FIK</td>
                                <td>100</td>
                            </tr>
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
