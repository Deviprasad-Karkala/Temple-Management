@extends('frontend.layout.main')

@section('main-container')

    <img src="{{url('frontend/images/MAIN.jpg')}}" width="100%" alt="">

    <div class="wearein">
        <a href="{{url('/')}}">HOME</a> <b style="color :white;">&#x2192;</b> <span>HOME</span>
    </div>

    <div class="mainBody">
        <h1><span>W</span>elcome to <br>Shree Kshethra Kukkundoor</h1>
        <div class="side">
            <img src="{{url('frontend/images/side.jpg')}}" alt="">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus voluptate aperiam eos exercitationem qui impedit expedita ad, laboriosam nam quia unde, sint cumque doloribus mollitia quidem facilis nobis sit aliquam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa esse ratione velit obcaecati minima, ipsam aliquam error fugiat non nostrum ipsum porro quos ut modi corrupti aperiam, facere ducimus iusto.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eveniet neque perferendis, accusantium expedita quod enim maxime tempore! Natus quam voluptas, perspiciatis consequuntur minima accusantium? Odit neque alias ipsa facilis!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita deleniti alias, id temporibus neque consectetur natus voluptates iure harum libero, quam rem velit modi laborum voluptatum cumque consequuntur at repellat!  <br>
                <br><a href="{{url('/about')}}" class="btn">Read More&nbsp;</a>
            </p>
        </div>
    </div>

    <div class="information">
        <h1>POOJA TIMINGS</h1>
        <div class="p-time">
            <img src="{{url('frontend/images/Morning.jpg')}}" width="400px" alt="">
            <img src="{{url('frontend/images/afternoon.jpg')}}"  width="400px" alt="">
            <img src="{{url('frontend/images/Night.jpg')}}"  width="400px" alt="">
        </div>
    </div>

@endsection
