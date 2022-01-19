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
                <form action="{{url('/updatereservation',$data->id)}}" method="get" enctype="multipart/form-data">

                    @csrf
                    <div>

                        <label><strong>name</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="name" value="{{$data->name}}" required>
                    </div>
                    <div>

                        <label><strong>email</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="email" value="{{$data->email}}" required>
                    </div>
                    <div>

                        <label><strong>phone</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="phone" value="{{$data->phone}}" required>
                    </div>
                    <div>

                        <label><strong>date</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="date" name="date" value="{{$data->date}}" required>
                    </div>
                    <div>

                        <label><strong>time</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="time" name="time" value="{{$data->time}}" required>
                    </div>
                    <div>

                        <label><strong>message</strong></label>
                        <br>
                        &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="message" value="{{$data->message}}" required>
                    </div>

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
