<div class="mainBody">
    <h1><span>S</span>evas List</h1>

    <div class="products" style="margin-right:-40px;">
        <div class="row">


            @foreach ($data as $data)

            <form  class="sevas" action="{{url('/addcart',$data->id)}}" method="post">
                @csrf
                <div>
                    <img src="{{ url('/sevaimage/' . $data->image) }}" width="100%" alt="">
                    <h1 style="padding-top:10px; font-size:1.5rem; "><span>{{ $data->title }}</span>{{ $data->descr }}</h1>
                    <p>Seva cost<br><i style="margin-top:20px " class="fa-solid fa-inr"></i>&nbsp;{{ $data->price }}
                    </p><br>
                    <input type="number" name="quantity" min="1" value="1" style="width: 100px;height:30px;">
                    <input class="bton" type="submit" value="Add to seva">

                </div>
            </form>
            @endforeach

        </div>
    </div>



</div>


