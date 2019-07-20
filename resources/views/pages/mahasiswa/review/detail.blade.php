@extends('layouts.app2')

@section('style')

<link href= "{{asset('material/plugins/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
@endsection
{{-- @section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
@endsection --}}

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3">
       <center> <a href=""><img src="{{asset('material/images/marmut.jpg')}}" alt=""></a></center>
    </div>
    <div class="col-lg-6">
        <h1>Marmut Merah Jambu</h1>
            <p align="justify" style="color:black;">
                    <img src="{{asset('material/images/author.png')}}" alt=""> &nbsp;&nbsp;<img src="{{asset('material/images/publisher.png')}}" alt=""> <br>
                    bintang&nbsp;&nbsp;<img src="{{asset('material/images/review.png')}}" alt=""> <br>
                    <b>Synopsis:</b><br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex nemo placeat ea explicabo maxime tempore doloribus labore fugit cum totam magni, dignissimos atque quis doloremque debitis laudantium, quaerat ducimus a.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perferendis, labore dicta impedit, inventore quisquam autem quidem nulla doloremque veritatis optio mollitia consectetur illo dolore repellat, sit ducimus laudantium libero?
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni aut ducimus error in, molestias repellat nobis repudiandae quae dicta nostrum possimus, iusto ipsam laudantium earum autem odit! Voluptas, alias id?
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quae asperiores architecto quam ipsa nam molestiae, ex illo atque modi. Fuga odit quae earum sit. Aspernatur minima earum assumenda esse.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi amet est ex nesciunt porro sit dolores dolorem facilis minus eius, nulla tenetur nobis, a cupiditate alias iusto nisi delectus.
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi ad quos enim possimus atque facilis ipsam quibusdam expedita rerum sequi. Dignissimos, maiores suscipit beatae itaque labore ad. Cupiditate, unde accusantium.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio itaque assumenda accusamus laboriosam? Ipsum, placeat beatae sed expedita voluptatem magnam distinctio quod earum. Unde molestiae ut dolorum, fugiat tempore corrupti?
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium voluptates aliquid quisquam deleniti esse, exercitationem repudiandae id aperiam atque animi natus voluptas eos fugiat velit ut illo sed quas doloribus.
                </p>
    </div>
    <div class="col-lg-3 col-md-5">
        <div class="card">
            <center>
            <div class="card-body">
                <h3 class="card-title">Top Vote</h3>
            </div>
            <div class="col-sm-8">
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
                <a href=""><img src="{{asset('material/images/marmut.jpg')}}" width="120px" height="180px" alt=""></a>
                <p align="center" style="color:black;"><b>Marmut Merah Jambu</b></p>
                <br>
            </div>
            </center>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Review</h4> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">
                <!-- Comment Row -->
                <form action="{{ route('mahasiswa.review.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" width="50"></div>
                        <div class="comment-text w-100">
                            <p style="color: black;"><b>Kim Do Young</b> for <b><u>Ask Again, Yes</u></b></p>
                            <p style="color: black;">"Light but Deep"</p>
                            <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><img src="{{ asset('material/images/users/profile.png')}}" alt="user" width="50"></div>
                        <div class="comment-text w-100">
                            <p style="color: black;"><b>{{ Sentinel::getUser()->name }}</b></p>
                            <input type="text" name="subject" id="firstName" class="form-control" placeholder="Subject"><br><br>
                            <textarea name="review" id="" rows="10" class="form-control" placeholder="Write your review here..."></textarea>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-warning" value="upload"> Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('material/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
@endsection
{{-- <div class="card">
    <img class="card-img-top img-responsive" src="{{asset('material/images/big/img2.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <a href="#" class="btn btn-warning">Review</a>
    </div>
</div> --}}
