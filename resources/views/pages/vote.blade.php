@extends('layouts.app3')

@section('style')
<style>
        .checked {
            color: orange;
        }
    </style>
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<br>
<br>
    <h1>Vote Your Books</h1>
    <h5>Don't see your favorite in here ? Add by yourself!</h5>
<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body collapse show">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th></th>
                                <th style="width:50%"><center>Book's Details</center></th>
                                <th><center>Votes</center></th>
                                <th><center>Vote</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $key=>$row)
                                <tr>
                                    <td><center>{{$key+1}}</center></td>
                                    <td>
                                        @if(isset($row->cover))
                                            <a href=""><img src="{{asset('storage/files/cover/'.$row->cover)}}" width="120px" height="180px" alt=""></a>
                                        @else

                                        @endif
                                    </td>
                                    <td>
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-9 col-xs-12">
                                                        <p align="justify" style="color:black;">
                                                            <b>{{$row->nama_buku}}</b><br>
                                                            <img src="{{asset('material/images/author.png')}}" alt="">&nbsp;&nbsp;{{$row->pengarang}}<br>
                                                            <p style="color:black;"><b>Synopsis :</b> <br>
                                                                {{$row->synopsis}}
                                                            </p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><center>{{$row->votes}}</center></td>
                                    <td>
                                        {{-- {{$id = Sentinel::getUser()->id}} --}}
                                        {{-- @if($row->votes->user_id == $id) --}}
                                        {{-- <button onclick="sweet()">Sweet Alert</button> --}}
                                        <center><a href="#" onclick="sweet()" class="btn btn-success">Vote</a></center>
                                        {{-- @else --}}
                                        {{-- <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-danger">Voted</a></center> --}}

                                        {{-- @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5">
        <center>
            <font color="black">
            Add your favorite book,<br>
            to become part of our <br>
            collection
            </font>
            <br>
            <br>
            <a href="#" onclick="sweet()" class="btn btn-success">Add Book</a>

        </center>
        <br>
        <br>
        <div class="card">
            <center>
            <div class="card-body">
                <h3 class="card-title">Winner of the last event</h3>
            </div>
            <div class="col-sm-8">
                @if(@isset($book->cover))
                    <a href=""><img src="{{asset('storage/files/cover/'.$book->cover)}}" width="120px" height="180px" alt=""></a>
                    <p align="center" style="color:black;"><b>{{$book->nama_buku}}</b></p>
                    <br>
                    <br>
                @else
                @endif
            </div>
            </center>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
<script>$('#myTable').DataTable({
        "order": [[ 0, "asc" ]]
    });
    </script>
<script>
function sweet (){
    swal.fire("You Should Login first", "", "warning");
}
</script>
@endsection
