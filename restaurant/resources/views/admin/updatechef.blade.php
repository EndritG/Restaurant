<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")

<form align="center" action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <h3><strong>Update Chef Info:</strong></h3>
    <br>
    <br>
    <div>
        <label>Chef Name:</label>
        <input style="color: blue" type="text" name="name" value="{{$data->name}}">
    </div>
    <br>
    <br>
    <div>
        <label>Speciality:</label>
        <input style="color: blue" type="text" name="speciality" value="{{$data->speciality}}">
    </div>
    <br>
    <br>
    <div>
        <label>Old Image:</label>
        <img align="center" border="6px" height="300px" width="300px"  src="/chefimage/{{$data->image}}">
    </div>
    <br>
    <br>
    <div>
        <label>New Image:</label>
       <input type="file" name="image" required="">
    </div>
    <br>
    <br>
    <div>
        <input style="color: red;" type="submit" value="Update Chef" required="">
    </div>

</form>
</div>

@include("admin.adminscript")

</body>
</html>
