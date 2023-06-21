<html>

<head>
    <title>Shree Kshethra Kukkundoor</title>
    <link rel="stylesheet" href="{{ url('frontend/styles.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/style.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ url('frontend/images/icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Montserrat:wght@300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ec0ac021b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ url('frontend/images/Logo.png') }}" alt="">
        </div>
        <div class="links">
            <a href="{{ url('/') }}">HOME</a>
            <a href="{{ url('/about') }}">ABOUT</a>
            <a id="highlight" href="{{ url('/seva') }}">SEVA LIST</a>
            <a href="{{ url('/gallery') }}">GALLERY</a>
            <a href="{{ url('/contact') }}">CONTACT US</a>


            @auth
            <a class="btn" style="margin-top:-10px;margin-bottom:5px;" href="{{ url('/showcart', Auth::user()->id) }}"><i class="fa-solid fa-cart-shopping"></i>&nbsp;CART</a>
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
    <div class="single">
        <table align="center" bgcolor="#e2a355" style="color:white;">

            <tr>
                <th style="padding:20px 100px 20px 100px;font-weight:600;">Seva Name</th>
                <th style="padding:20px 100px 20px 100px;font-weight:600;">Price</th>
                <th style="padding:20px 100px 20px 100px;font-weight:600;">Quantity</th>

            </tr>

            <form action="{{url('orderconfirm')}}" method="POST">
                @csrf
                @foreach ($data as $data)
                <tr align="center">
                    <td style="padding: 30px;"><input type="hidden" name="sevaname[]" value="{{ $data->title }}{{ $data->descr }}">
                        {{ $data->title }}{{ $data->descr }}
                    </td>
                    <td><input type="hidden" name="price[]" value="{{ $data->price }}">
                        {{ $data->price }}
                    </td><input type="hidden" name="quantity[]" value="{{ $data->quantity }}">
                    <td>{{ $data->quantity }}</td>
                </tr>
                @endforeach
        </table>

        <table align="center" bgcolor="#e2a355" style="color:white;">
            <tr>
                <th style="padding:20px 100px 20px 100px;font-weight:600;">Action</th>
            </tr>
            @foreach ($data2 as $data2)
            <tr align="center">
                <td style="padding: 30px;"><a class="btnn" href="{{ url('/remove', $data2->id) }}">Remove</a>
                </td>
            </tr>
            @endforeach
        </table>


    </div>

    <div align="center" style="padding: 10px;">
        <button class="btn" style="background-color: blue" type="button" id="order">Book Now</button>
    </div>


    <div id="appear" align="center" style="padding:10px 400px 10px 400px; display:none">
        <div style="padding: 10px;">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div style="padding: 10px;">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div style="padding: 10px;">
            <label>E-Mail</label>
            <input type="email" name="email" placeholder="Your Email id" required>
        </div>

        <div align="center" style="padding: 10px;">
            <button class="btn" style="background-color:#e2a355" type="button" id="online">Pay Online</button>
            <input id="offline" type="button" class="btn" style="background-color:grey;" type="submit" value="Pay Offline">
        </div>

        <div id="appear-now" style="display:none">
            <p style="text-align:center""><b>Scan This QR Code To Pay Online</b></p>
            <div class=" s-btw" style="padding: 10px;">
                <img src="{{url('frontend/images/Gpay.png')}}" width="50px" alt="">
                <img src="{{url('frontend/images/Phonepe.png')}}" width="50px" alt="">
                <img src="{{url('frontend/images/Paytm.png')}}" width="50px" alt="">
                <img src="{{url('frontend/images/paypal.png')}}" width="50px" alt="">
        </div>

        <div style="padding: 10px;">
            <img src="{{url('frontend/images/Qr.jpg')}}" width="200px" alt="">
            <h3>OR</h3>
            <h1>UPI ID: deviprasadbhat71@okaxis</h1>
        </div>
        <div class="p-time" style="padding: 10px;">
            <input id="close" type="button" class="btn" style="background-color:red;" type="submit" value="Cancel Seva">
            <input class="btn" style="background-color:green;" type="submit" value="Confirm Seva">
        </div>
    </div>

    <div id="appear-then" style="display:none">
        <p style="text-align:center"><b>Click On Confirm Seva</b></p>
        <div class="p-time" style="padding: 10px;">
            <input id="close" type="button" class="btn" style="background-color:red;" type="submit" value="Cancel Seva">
            <input class="btn" style="background-color:green;" type="submit" value="Confirm Seva">
        </div>
    </div>
    </div>
    </form>

    <script type="text/javascript">
        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );

        $("#online").click(
            function() {
                $("#appear-now").show();
                $("#appear-then").hide();
            }
        );
        $("#offline").click(
            function() {
                $("#appear-then").show();
                $("#appear-now").hide();
            }
        );
    </script>
</body>

</html>