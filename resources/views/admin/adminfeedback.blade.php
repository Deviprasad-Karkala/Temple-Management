<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')
    </div>


    <div>
        <table bgcolor="grey" border="3px" style="width:68%;margin-bottom: 60px;margin-left:350px; margin-top:-500px">
            <tr align="center">
                <th style="padding:30px 60px">Name</th>
                <th style="padding:30px 60px">Email</th>
                <th style="padding:30px 60px">Phone</th>
                <th style="padding:30px 60px">Feedback</th>
            </tr>
            @foreach ($data as $data)
                <tr align="center">
                    <td style="padding-bottom:20px">{{ $data->name}}</td>
                    <td style="padding-bottom:20px">{{ $data->email}}</td>
                    <td style="padding-bottom:20px">{{ $data->phone}}</td>
                    <td style="text-align:justify;width:500px;padding:0px 20px 20px 20px">{{ $data->feedback}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    @include('admin.adminscript')

</body>

</html>
