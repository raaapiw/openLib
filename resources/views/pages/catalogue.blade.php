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
<div class="row ">
    <div class="col-md-12">
        <center>
            <form action="{{ url()->current() }}">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="Search what you're going to review . . ."/>
                </div>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Advanced</button>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">
                    search
                </button>
            </form>
        </center>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Advanced Search</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('advancedSearch') }}" method="GET" id="myForm">
                    <div class="form-group">
                        <label class="control-label">Types:</label>
                        <select class="form-control custom-select" name="type">
                            <option disabled value="">Choose the type of item</option>
                            <option value="1">Article - Restricted Use</option>
                            <option value="2">Bahan Ajar</option>
                            <option value="3">Books - Circulation</option>
                            <option value="4">Books - Reference</option>
                            <option value="5">Books - Restricted Use</option>
                            <option value="6">Case Studies</option>
                            <option value="7">CD/DVD</option>
                            <option value="8">Dissertation</option>
                            <option value="9">E-Article</option>
                            <option value="10">International Journal</option>
                            <option value="11">National Journal</option>
                            <option value="12">Scientific Work - Skripsi</option>
                            <option value="13">Scientific Work - TA</option>
                            <option value="14">Scientific Work - Thesis</option>
                            <option value="15">Magazine</option>
                            <option value="16">Practicum Module</option>
                            <option value="17">Proceeding</option>
                            <option value="18">Research Report</option>
                            <option value="19">Teaching Note</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="code" class="control-label">Code:</label>
                        <input type="text" name="nama_buku" class="form-control" id="code">
                    </div>
                    <div class="form-group">
                        <label for="title" class="control-label">Title:</label>
                        <input type="text" name="nama_buku" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="author" class="control-label">Author:</label>
                        <input type="text" name="pengarang" class="form-control" id="author">
                    </div>
                    <div class="form-group">
                        <label for="publisher" class="control-label">Publisher:</label>
                        <input type="text" name="penerbit" class="form-control" id="publisher">
                    </div>
                    <div class="form-group">
                        <label for="editor" class="control-label">Editor:</label>
                        <input type="text" name="editor" class="form-control" id="editor">
                    </div>
                    <div class="form-action">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="myFunction()" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
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
                            @if ($row->reviews == 0)
                                {{$rating = 0}}

                            @else
                                {{$rating = $row->rating/$row->reviews}}

                            @endif
                            @if($rating >= 0 && $rating<1)
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            @elseif($rating >= 1 && $rating<2)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            @elseif($rating >= 2 && $rating<3)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            @elseif($rating >= 3 && $rating<4)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            @elseif($rating >= 4 && $rating<5)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            @else
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            @endif<br>
                            <img src="{{asset('material/images/author.png')}}" alt="">{{$row->pengarang}}<br>
                            <img src="{{asset('material/images/review.png')}}" alt="">&nbsp;&nbsp;{{$row->reviews}}&nbsp; people reviewing this<br>
                            <a href="{{ route('detailCatalogue', $row->id)}}" class="btn btn-warning">Review</a>
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
<script>
    function myFunction() {
        document.getElementById("myForm").submit();
    }
</script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
