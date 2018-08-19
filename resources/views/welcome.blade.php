@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12"><h2 class="text-center">Dashboard Page</h2>
            <div class="hidden-xs hidden-sm col-md-12 text-right">
                <div class="screen-box screen-slider">
                    <div class="item">
                        <img src="{{url('colorlib/images/messi1.jpg')}}" style="width:200px;height:356px;" alt="">
                    </div>
                    <div class="item">
                        <img src="{{url('colorlib/images/messi2.jpg')}}" style="width:200px;height:356px;" alt="">
                    </div>
                    <div class="item">
                        <img src="{{url('colorlib/images/messi3.jpg')}}" style="width:200px;height:356px;" alt="">
                    </div>
                    <div class="item">
                        <img src="{{url('colorlib/images/messi4.jpg')}}" style="width:200px;height:356px;" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection