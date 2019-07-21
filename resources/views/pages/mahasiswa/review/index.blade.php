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
                    <th style="width:15%"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key=>$row)
                <tr>
                    <td><img src="{{asset('storage/files/cover/'.$row->cover)}}" width="120px" height="180px" alt=""></td>
                    <td>
                        <p align="justify" style="color:black;">
                            <b>{{$row->nama_buku}}</b><br>
                            "bintang"<br>
                            <img src="{{asset('material/images/author.png')}}" alt="">{{$row->pengarang}}<br>
                            <img src="{{asset('material/images/review.png')}}" alt="">&nbsp;&nbsp;{{$row->reviews}}&nbsp; people reviewing this<br>
                            <a href="{{ route('mahasiswa.review.detail', $row->id)}}" class="btn btn-warning">Review</a>
                        </p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
