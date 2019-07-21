@extends('layouts.app3')

@section('style')

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
                                                            "bintang"<br>
                                                            <img src="{{asset('material/images/author.png')}}" alt="">&nbsp;&nbsp;{{$row->pengarang}}<br>
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
                                        <center><a href="{{ route('mahasiswa.vote.detail', $row->id)}}" class="btn btn-success">Vote</a></center>
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
            <a href="{{route('mahasiswa.book.add')}}" class="btn btn-success">Add Book</a>

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
