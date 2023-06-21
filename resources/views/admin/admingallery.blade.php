<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <div>
            <form style="position: relative; top:150px; right:100%;" action="{{ url('/uploadgallery') }}" method="post"
                enctype="multipart/form-data">

                @csrf
                <div style=" padding:10px;">
                    <label>Add Image</label>
                    <input type="file" name="image" required>
                </div>

                <div style="padding:10px;">
                    <input style="border:1px solid grey; padding:7px 25px;" type="submit" value="Save">
                </div>
            </form>
        </div>


    </div>


    <div>
        <table bgcolor="grey" border="3px" style="position: relative; left:25%; margin-top:-320px; margin-bottom:60px;">
            <tr align="center">
                <th style="padding:20px 100px 20px 100px">Image</th>
                <th style="padding:20px 100px 20px 100px">Action</th>
                <th style="padding:20px 100px 20px 100px">Update</th>
            </tr>
            @foreach ($data as $data)
                <tr align="center">
                    <td style="padding:0px 100px 20px 100px;"><img src="/templegallery/{{ $data->image }}" width="200px"
                            height="150px" alt=""></td>
                    <td style="padding:0px 100px 20px 100px;"><a href="{{ url('/deleteimage', $data->id) }}"><u>Delete</u></a></td>
                    <td style="padding:0px 100px 20px 100px;"><a href="{{ url('/updateimage', $data->id) }}"><u>Update</u></a></td>
                </tr>
            @endforeach
        </table>
    </div>

    @include('admin.adminscript')

</body>

</html>
