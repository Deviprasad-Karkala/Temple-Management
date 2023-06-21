@extends('frontend.layout.main')

@section('main-container')
    <img src="{{ url('frontend/images/5main.jpg') }}" width="100%" alt="">

    <div class="wearein">
        <a href="{{ url('/') }}">HOME</a> <b style="color :white;">&#x2192;</b> <span>CONTACT US</span>
    </div>

    <div class="mainBody">
        <h1><span>C</span>ontact Us<br>Postal Correspondence Address</h1><br><br>
        <h2>Shree Kshethra Kukkundoor Temple</h2><br>
        <h3><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Address</h3>
        <h5>Kukkundoor, Karnataka 574104, India
            Karkala, Karnataka</h5><br>
        <h3><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;Phone</h3>
        <h5>+91 9448215700</h5><br>
    </div>
    <hr>
    <div class="mainBody">
        @include("frontend.feedback")

    </div>
    <div class="information">
        <h1>Get Directions</h1>
        <p><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31069.055348032907!2d74.94806708858138!3d13.248400926829664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbb57d196557ad7%3A0xbf7a23ef32c609cb!2sSri%20Durga%20Parameshwari%20Temple!5e0!3m2!1sen!2sin!4v1665416161492!5m2!1sen!2sin"
                width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
    <div class="mainBody">
        <div class="contactuss">
            <h1><span>O</span>ur Team</h1>
            <div class="mainseva">
                <div class="wrapper">
                    <div class="img-area">
                        <div class="inner-area">
                            <img src="{{ url('frontend/images/Dp2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="name">Deviprasad</div>
                    <div class="about">Designer & Developer</div>
                    <div class="social-icons">
                        <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="yt"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="img-area">
                        <div class="inner-area">
                            <img src="{{ url('frontend/images/Sharath.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="name">Sharath Kanangi</div>
                    <div class="about">Sri Guru Studio</div>
                    <div class="social-icons">
                        <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="yt"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
