<html>

<head>
    <title>Shree Kshethra Kukkundoor</title>
    <link rel="stylesheet" href="{{url('frontend/styles.css')}}">
    <link rel="stylesheet" href="{{url('frontend/style.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{url('frontend/images/icon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Montserrat:wght@300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/7ec0ac021b.js"
      crossorigin="anonymous"
    ></script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{url('frontend/images/Logo.png')}}" alt="">
        </div>
        <div class="links">
            <a href="{{url('/')}}">HOME</a>
            <a href="{{url('/about')}}">ABOUT</a>
            <a id="highlight" href="{{url('/seva')}}">SEVA LIST</a>
            <a href="{{url('/gallery')}}">GALLERY</a>
            <a href="{{url('/contact')}}">CONTACT US</a>


@auth
<a class="btn" style="margin-top:-10px;margin-bottom:5px;" href="{{url('/showcart',Auth::user()->id)}}"><i class="fa-solid fa-cart-shopping"></i>&nbsp;CART</a>
@endauth

@guest

@endguest



            @if (Route::has('login'))
                    @auth
                    <div class="lout">
                        <x-app-layout>

                       </x-app-layout>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;LOG IN</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;REGISTER</a>
                        @endif
                    @endauth
            @endif

        </div>
    </div>
