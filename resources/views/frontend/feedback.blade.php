
<h1><span>F</span>eedback</h1>
<h1>About Temple</h1>
<div class="side">
    <img src="{{ url('frontend/images/Logo img.jpg') }}" alt="">



    <form style="margin-left: 20px;" action="{{url('feedback')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="contain">
            <label><b>NAME</b></label>
            <input type="text" placeholder="Name" name="name">

            <label><b>EMAIL ADDRESS</b></label>
            <input type="email" placeholder="Email" name="email">


            <label><b>CONTACT NUMBER</b></label>
            <input type="text" placeholder="Phone" name="phone" >

            <label><b>YOUR FEEDBACK</b></label>

            <textarea placeholder="Short and Sweet" name="feedback" rows="4" cols="50"></textarea>


            <button type="submit"
                style="background-color: #1f5c99;
                color: white;
                padding: 15px 30px;
                margin: 20px 0;
                border: none;
                cursor: pointer;
                font-weight: 400;
                font-size: 1rem;">SEND</button>
        </div>
    </form>
</div>
