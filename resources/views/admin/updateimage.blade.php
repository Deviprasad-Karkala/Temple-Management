<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <div>
            <form style="position: relative; top:150px; right:100%;" action="{{ url('/updategallery', $data->id) }}" method="post"
                enctype="multipart/form-data">

                @csrf

                <div style=" padding:10px;">
                    <label>Old Image</label>
                    <img src="/templegallery/{{ $data->image }}" width="150px" height="150px" alt="">
                </div>

                <div style=" padding:10px;">
                    <label>Select New Image</label>
                    <input type="file" name="image" required>
                </div>

                <div style="padding:10px;">
                    <input style="border:1px solid grey; padding:7px 25px;" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
    @include('admin.adminscript')

</body>

</html>
