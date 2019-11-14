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
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <center>
            <h1 style="font-size:80px">LEADERBOARD</h1> <br>
            <img src="{{asset('material/images/tropi.png')}}" alt=""height="200px" width="200px">
            <br>
            <br>
        </center>
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
