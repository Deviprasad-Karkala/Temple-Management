<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative;top:200px;right:15%;">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding:30px 100px">NAME</th>
                <th style="padding:30px 100px">EMAIL</th>
                <th style="padding:30px 100px">ACTION</th>
            </tr>

            @foreach ($data as $data)
            <tr align="center">
                <td style="padding-bottom:20px">{{$data->name}}</td>
                <td style="padding-bottom:20px">{{$data->email}}</td>

                @if ($data->usertype=="0")
                <td style="padding-bottom:20px"><a href="{{url('/deleteuser',$data->id)}}"><u>Delete</u></a></td>
                @else
                <td style="padding-bottom:20px">Not Allowed</td>
                @endif



            </tr>
            @endforeach
        </table>
    </div>

    </div>

    @include("admin.adminscript")

  </body>
</html>

</body>
</html>
