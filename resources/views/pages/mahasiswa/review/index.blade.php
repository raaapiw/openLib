@extends('layouts.app2')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <h2>Catalogue Books</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width:15%"></th>
                    <th ></th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></td>
                    <td>
                        <p align="justify" style="color:black;">
                            <b>Marmut Merah Jambu</b><br>
                            "bintang"<br>
                            <img src="{{asset('material/images/author.png')}}" alt=""> <br>
                            <img src="{{asset('material/images/review.png')}}" alt=""> <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex nemo placeat ea explicabo maxime tempore doloribus labore fugit cum totam magni, dignissimos atque quis doloremque debitis laudantium, quaerat ducimus a.
                        </p>
                    </td>
                    <td><a href="{{ route('mahasiswa.review.detail')}}" class="btn btn-warning">Review</a></td>
                </tr>
                <tr>
                    <td><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></td>
                    <td>
                        <p align="justify" style="color:black;">
                            <b>Marmut Merah Jambu</b><br>
                            "bintang"<br>
                            <img src="{{asset('material/images/author.png')}}" alt=""> <br>
                            <img src="{{asset('material/images/review.png')}}" alt=""> <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex nemo placeat ea explicabo maxime tempore doloribus labore fugit cum totam magni, dignissimos atque quis doloremque debitis laudantium, quaerat ducimus a.
                        </p>
                    </td>
                    <td><a href="#" class="btn btn-warning">Review</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
