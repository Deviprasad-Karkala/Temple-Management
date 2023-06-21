@extends('frontend.layout.main')

@section('main-container')
    <img src="{{ url('frontend/images/2main.jpg') }}" width="100%" alt="">

    <div class="wearein">
        <a href="{{ url('/') }}">HOME</a> <b style="color :white;">&#x2192;</b> <span>GALLERY</span>
    </div>

    <div class="mainBody">
        <h1><span>G</span>allery</h1>

        <div class="products"  style="margin-left:40px;">
            <div class="row">

                @foreach ($data2 as $data2)
                    <div class="pic">
                        <img src="{{ url('/templegallery/' . $data2->image) }}" width="350px" alt="">
                    </div>
                @endforeach
            </div>
        </div>



    </div>
@endsection
