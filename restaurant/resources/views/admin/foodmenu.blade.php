<!doctype html>
<html lang="en">
<head>
   @include("admin.admincss")


</head>

<body>
<div style="display: flex">
    @include("admin.navbar")

    <div class="container-scroller">

        <div style="position: relative; top:60px;" align="center">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf
            <div>
                <br>
                <br>
                <label><strong>Title:</strong></label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: red;" type="text" name="title" placeholder="Write a title" required>
            </div>
            <br>
            <br>
            <div>
                <label><strong>Price:</strong></label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: red;" type="num" name="price" placeholder="Price" required>
            </div>
            <br>
            <div>
                <label><strong>Image:</strong></label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: white;" type="file" name="image"  required>
            </div>
            <br>
            <div>
                <label><strong>Description:</strong></label>
                <br>
                &emsp;    &emsp;  &emsp;    &emsp;   <input style="color: red;" type="text" name="description" placeholder="Description..." required>
            </div>
            <br>
                <div>
                    &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   <input   type="submit" value="Save"  required>
            </div>

        </form>
            <br>
            <br>

            <div class="container-scroller">
        <div>

            <table bgcolor="gray">
                <tr style="color:black;">
                    <th style="padding:50px "> Food Names</th>
                    <th style="padding:50px "> Price</th>
                    <th style="padding:50px "> Description</th>
                    <th style="padding:50px "> Image</th>
                    <th style="padding:50px " color="black"> Action  </th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                <td>{{$data->title}}</td>
                <td style="color: red"><strong>{{$data->price}}</strong></td>
                <td>{{$data->description}}</td>
                <td><img src="/foodimage/{{$data->image}}" height="250px" width="300px" border="3px"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}" style="color: red" ><strong>Delete</strong></a> <br> <br>
                        <a href="{{url('/updateview',$data->id)}}" style="color: red" ><strong>Update</strong></a></td>
                    <td> </td>
                    <br>
                    <br>
                </tr>


                @endforeach
            </table>

        </div>




    </div>
</div>
</div>


@include("admin.adminscript")


</body>
</html>
