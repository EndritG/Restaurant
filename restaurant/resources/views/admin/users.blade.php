<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    <div>
        @include("admin.navbar")
        <div style="position: absolute; top: 28px; left: 250px">
            <table>
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser',$data)}}"> Delete </a></td>
                        @else
                        <td style="background-color:#FF0000"> Not Allowed</td>
                @endif
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@include("admin.adminscript")
</body>
</html>


