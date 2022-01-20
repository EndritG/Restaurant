<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")
<div>
    <br>
    <br>
<h1 align="center">Customer Orders</h1><br>
    <br>
    <table style="border: 2px solid black" bgcolor="gray">
        <tr align="center" style="border: 2px solid black" >
            <td style="padding: 30px">Name</td>
            <td style="padding: 30px">Phone</td>
            <td style="padding: 30px">Address</td>
            <td style="padding: 30px">Food Name</td>
            <td style="padding: 30px">Price</td>
            <td style="padding: 30px">Quantity</td>
            <td style="padding: 30px">Total Price</td>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td style="padding: 30px">{{$data->name}}</td>
            <td style="padding: 30px">{{$data->phone}}</td>
            <td style="padding: 30px">{{$data->address}}</td>
            <td style="padding: 30px">{{$data->foodname}}</td>
            <td style="padding: 30px">{{$data->price}}</td>
            <td style="padding: 30px">{{$data->quantity}}</td>
            <td style="padding: 30px">{{$data->price * $data->quantity}}</td>
        </tr>
        @endforeach

    </table>
</div>
</div>

@include("admin.adminscript")

</body>
</html>
