@extends('layouts.app2')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
<style>
.checked {
  color: orange;
}
</style>
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
                                        {{-- @if($row->votes == 0) --}}
                                            <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>

                                            {{-- @if() --}}
                                        {{-- @elseif($row->votes !== 0 && $row->votess == null)
                                        <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>

                                        @else
                                            @if()
                                            @foreach($row->votess as $votesss)
                                                @if($votesss->book_id == $row->id && $votesss->user_id == Sentinel::getUser()->id)
                                                <center><a href="#" class="btn btn-danger">Voted</a></center>
                                                @elseif($votesss == null)
                                                <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>
                                                @else

                                                @endif
                                                <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>
                                            @endforeach
                                        @endif --}}
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
            <a href="{{route('mahasiswa.book.add')}}" class="btn btn-success">Add Book</a>

        </center>
        <br>
        <br>
    </div>
</div>
<h1>Books you have voted</h1>
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
                            @foreach($voted as $key=>$row)
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
                                                            <img src="{{asset('material/images/author.png')}}" alt="">&nbsp;&nbsp;{{$row->book->pengarang}}<br>
                                                            <p style="color:black;"><b>Synopsis :</b> <br>
                                                                {{$row->book->synopsis}}
                                                            </p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><center>{{$row->book->votes}}</center></td>
                                    <td>
                                        {{-- @if($row->votes == 0) --}}
                                            <center><a href="#" class="btn btn-danger">Voted</a></center>

                                            {{-- @if() --}}
                                        {{-- @elseif($row->votes !== 0 && $row->votess == null)
                                        <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>

                                        @else
                                            @if()
                                            @foreach($row->votess as $votesss)
                                                @if($votesss->book_id == $row->id && $votesss->user_id == Sentinel::getUser()->id)
                                                @elseif($votesss == null)
                                                <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>
                                                @else

                                                @endif
                                                <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>
                                            @endforeach
                                        @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card"> --}}
        <div class="col-md-3">
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
    {{-- </div> --}}
</div>
<div class="col-md-3">

</div>
@endsection

@section('script')
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
<script>$('#myTable').DataTable({
        "order": [[ 0, "asc" ]]
    });</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.btn').click(function(){
            var currentValue = $(this).attr("id");
            $.ajax({
                url: '{{ route('mahasiswa.vote.store')}}',
                method: 'post',
                data: {id:currentValue , vote: 1.val()},
                success: function(data){
                    alert(data);
                },
                error: function(){},
            });
        });
    });
</script>
@endsection
