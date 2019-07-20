@extends('layouts.app2')

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
                            {{-- @foreach($shippings as $key=>$row) --}}
                                <tr>
                                    <td>1</td>
                                    <td><a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a></td>
                                    <td>
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><center>18 Votes</center></td>
                                    <td><center><a href="#" class="btn btn-success"> Vote</a></center></td>
                                </tr>
                            {{-- @endforeach --}}
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
            <a href="#" class="btn btn-success">Add Book</a>

        </center>
        <br>
        <br>
        <div class="card">
            <center>
            <div class="card-body">
                <h3 class="card-title">Winner of the last event</h3>
            </div>
            <div class="col-sm-8">
                    <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                    <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                    <a href="#" class="btn btn-success">Vote</a>
                    <br>
                    <br>
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
@endsection
