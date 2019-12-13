@extends('layouts.app2')

@section('style')
<style>
    table.dataTable thead tr {
        background-color: red;
    }
</style>
<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <center>
            <h1 style="font-size:50px">LEADERBOARD</h1> <br>
            <br>
            <br>
            <img src="{{asset('material/images/tropi.png')}}" alt=""height="180px" width="180px">
        </center>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Winner of the last Event</h4>
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                {{-- <img class="card-img-top" src="{{ asset('material/images/background/profile-bg.jpg')}}" alt="Card image cap"> --}}

                <div class="card-body little-profile text-center">
                    @if($user->gender == 'M')
                    <div><img src="{{ asset('material/images/users/male.png')}}"  alt="default" width="100px"/></a></div>
                    @else
                    <div><img src="{{ asset('material/images/users/female.png')}}" alt="default" width="100px"/></div>
                    @endif
                    <h3 class="m-b-0">{{$user->name}}</h3>
                    <p><center>{{$user->faculty}} - {{$user->nim}}</center></p>
                    <p>{{$user->points}} points, {{$user->reviews}} Review</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-outline-info">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table color-table red-table">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Name</th>
                                <th></th>
                                <th>Faculty</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key=>$row)
                            <tr>
                                <td></td>
                                <td><font color="black">{{$row->name}}</font></td>
                                <td id="detailInfo" ></td>
                                <td><font color="black">{{$row->faculty}}</font></td>
                                <td><font color="black">{{$row->points}}</font></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<center><img src="{{asset('material/images/crown.png')}}" alt=""height="25px" width="25px"></center>
<script>
$('#detailInfo').html('<center><img src="{{asset('material/images/crown.png')}}" alt=""height="25px" width="25px"></center>');
</script>
<script>
    $(document).ready(function() {
        var t = $('#myTable').DataTable( {
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            },
            {
                "searchable": false,
                "orderable": false,
                "targets": 1
            },
            {
                "searchable": false,
                "orderable": false,
                "targets": 2
            },
            {
                "searchable": false,
                "orderable": false,
                "targets": 3
            } ],
            "orderFixed": [[ 4, 'desc' ]],
            "paging":   false,
            "info":     false,
            "searching" : false
        } );
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
