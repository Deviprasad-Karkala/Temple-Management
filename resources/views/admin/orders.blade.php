

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">
    @include("admin.navbar")


    <div>
        <table bgcolor="grey" border="3px" style="width:68%; margin:150px 100px 30px 0px ;">
            <tr align="center">
                <th style="padding:40px 60px 40px 40px">Name</th>
                <th style="padding:40px">Phone</th>
                <th style="padding:40px">E-mail</th>
                <th style="padding:40px">Sevas</th>
                <th style="padding:40px">Price</th>
                <th style="padding:40px 20px 40px 20px">Quantity</th>
                <th style="padding:40px 40px 40px 60px">Total</th>
            </tr>
            @foreach ($data as $data)
                <tr align="center">
                    <td style="padding-bottom:20px">{{ $data->name}}</td>
                    <td style="padding-bottom:20px">{{ $data->phone}}</td>
                    <td style="text-align:justify;width:500px;padding:0px 50px 20px 50px">{{ $data->email}}</td>
                    <td style="text-align:justify;padding-bottom:20px">{{ $data->sevaname}}</td>
                    <td style="padding-bottom:20px">{{ $data->price}} Rs</td>
                    <td style="padding-bottom:20px">{{ $data->quantity}}</td>
                    <td style="padding-bottom:20px">{{ $data->price * $data->quantity}} Rs</td>
                </tr>
            @endforeach
        </table>
    </div>

    </div>
    @include("admin.adminscript")

  </body>
</html>
