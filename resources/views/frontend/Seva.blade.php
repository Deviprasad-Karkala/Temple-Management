@extends('frontend.layout.main')

@section('main-container')

<img src="{{url('frontend/images/4main.jpg')}}" width="100%" alt="">

<div class="wearein">
    <a href="{{url('/')}}">HOME</a> <b style="color :white;">&#x2192;</b> <span>SEVA LIST</span>
</div>

@include("frontend.sevas")

<div class="information">
    <h1>POOJA TIMINGS</h1>
    <div class="p-time">
        <img src="{{url('frontend/images/Morning.jpg')}}" width="400px" alt="">
        <img src="{{url('frontend/images/afternoon.jpg')}}" width="400px" alt="">
        <img src="{{url('frontend/images/Night.jpg')}}" width="400px" alt="">
    </div>
</div>

@endsection