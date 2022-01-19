<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<br>
<br>

<div style="display: flex" align="center" class="container-scroller">
    @include("admin.navbar")
<form action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data">

    @csrf
    <h2>ADMIN CHEF MANAGMENT</h2>
    <br>
    <div>
        <label>Name</label>
        <input style="color: blue; " type="text" name="name" required placeholder="Enter Name">
    </div>
    <br>
    <div>
        <label>Speciality</label>
        <input style="color: blue; " type="text" name="speciality" required placeholder="Enter the speciality">
    </div>
    <br>
    <div>
        <input style="color: blue; " type="file" name="image" required="">
    </div>
    <br>
    <input style="color: blue; " type="submit" value="Save" required="">
</form>
<br>
    <br>
    <br>
    <table  border="13px" align="center" bgcolor="gray">
        <tr style="color:black; bottom: 9px;" align="center">
            <th style="padding: 30px;">Chef Name:</th>
            <th style="padding: 30px;">Speciality</th>
            <th style="padding: 30px; border: 2px">Image</th>
            <th style="padding: 30px;">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="400" width="200" src="/chefimage/{{$data->image}}"></td>
            <td><a href="{{url('/deletechef',$data->id)}}" style="color: red" ><strong>Delete</strong></a> <br> <br>
                <a href="{{url('/updatechef',$data->id)}}" style="color: red" ><strong>Update</strong></a></td>
        </tr>
        @endforeach
    </table>
</div>

@include("admin.adminscript")

</body>
</html>
