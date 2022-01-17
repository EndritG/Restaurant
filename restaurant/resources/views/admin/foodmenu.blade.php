<!doctype html>
<html lang="en">
<head>
   @include("admin.admincss")


</head>

<body>
<div style="display: flex">
    @include("admin.navbar")

    <div class="container-scroller">

        <div style="position: relative; top:60px;">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf
            <div>
                <label>Title:</label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: blue;" type="text" name="title" placeholder="Write a title" required>
            </div>
            <br>
            <br>
            <div>
                <label>Price:</label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: blue;" type="num" name="price" placeholder="Price" required>
            </div>
            <br>
            <div>
                <label>Image:</label>
                <br>
                &emsp;  &emsp;  &emsp;  <input style="color: blue;" type="file" name="image"  required>
            </div>
            <br>
            <div>
                <label>Description:</label>
                <br>
                &emsp;    &emsp;  &emsp;    &emsp;   <input style="color: blue;" type="text" name="description" placeholder="Description..." required>
            </div>
            <br>
                <div>
                    &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   <input style="color: blue"  type="submit" value="Save" required>
            </div>

        </form>
            <br>
            <br>
            <div class="container-scroller">
        <div>

            <table bgcolor="gray">
                <tr>
                    <th style="padding:50px "> Food Names</th>
                    <th style="padding:50px "> Price</th>
                    <th style="padding:50px "> Description</th>
                    <th style="padding:50px "> Image</th>
                </tr>
            </table>

        </div>




    </div>
</div>
</div>


@include("admin.adminscript")


</body>
</html>
