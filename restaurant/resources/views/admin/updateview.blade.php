<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
</head>
<body>
<div style="display: flex" align="center">
<div class="container-scroller">
    @include("admin.navbar")
    <div class="container-scroller">
    <div style="position: relative; top:60px;" align="center">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            <div>
                <br>
                <br>
                <label><strong>Title:</strong></label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <br>
            <br>
            <div>
                <label><strong>Price:</strong></label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: red;" type="num" name="price"  value="{{$data->price}}" required>
            </div>
            <br>

            <br>
            <div>
                <label><strong>Description:</strong></label>
                <br>
                &emsp;    &emsp;  &emsp;    &emsp;   <input style="color: red;" type="text" name="description"  value="{{$data->description}}" required>
            </div>
            <br>
            <br>
            <div>
                <label><strong>Old Image :</strong></label>
                <img height="200px"  width="200px" border="3px" src="/foodimage/{{$data->image}}">
                <br>
                <br>

            </div>
            <div>
                <label><strong>New Image :</strong></label> <br>
                 <br>
              <input style="color: white;" type="file" name="image"   required>
            </div>
            <div>
                <br>

                <br>
                &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   <input   type="submit" value="Save"  required>
            </div>

        </form>
        <br>
        <br>
</div>
    </div>
</div>
</body>

@include("admin.adminscript")


</html>
