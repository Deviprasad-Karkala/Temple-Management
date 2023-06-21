<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div>
            <form style="position: relative; top:150px; right:100%;" action="{{ url('/uploadseva') }}" method="post"
                enctype="multipart/form-data">

                @csrf

                <div style=" padding:10px;">
                    <label style="padding-right: 30px">First Letter</label>
                    <input style="color: black" type="text" name="title" placeholder="Enter First Letter" required>
                </div>

                <div style=" padding:10px;">
                    <label style="padding-right:66px">Name</label>
                    <input style="color: black; " type="text" name="descr" placeholder="Enter Heading" required>
                </div>

                <div style=" padding:10px;">
                    <label style="padding-right: 75px">Price</label>
                    <input style="color: black" type="text" name="price" placeholder="Enter Price" required>
                </div>

                <div style=" padding:10px;">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>

                <div style="padding:10px;">
                    <input style="border:1px solid grey; padding:7px 25px;" type="submit" value="Save">
                </div>
            </form>
        </div>


    </div>
    <div>
        <table bgcolor="grey" border="3px" style="margin-bottom: 60px;margin-left:280px; margin-top:-150px">
            <tr align="center">
                <th colspan="2" style="padding:60px">Sevas Names</th>
                <th style="padding:60px">Price</th>
                <th style="padding:60px">Image</th>
                <th style="padding:60px">Action</th>
                <th style="padding:60px">Update</th>
            </tr>
            @foreach ($data as $data)
                <tr>
                    <td style="padding:0px 0px 20px 70px ">{{ $data->title }}</td>
                    <td style="padding:0px 0px 20px 0px ">{{ $data->descr }}</td>
                    <td align="center" style="padding-bottom:20px">{{ $data->price }}</td>
                    <td align="center" style="padding-bottom:20px"><img src="/sevaimage/{{ $data->image }}" width="150px"
                            height="150px" alt=""></td>
                    <td align="center" style="padding-bottom:20px"><a href="{{ url('/deleteseva', $data->id) }}"><u>Delete</u></a></td>
                    <td align="center" style="padding-bottom:20px"><a href="{{ url('/updateview', $data->id) }}"><u>Update</u></a></td>
                </tr>
            @endforeach
        </table>
    </div>

    @include('admin.adminscript')

</body>

</html>
