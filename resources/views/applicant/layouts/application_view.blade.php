@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <h1>hello world</h1>

    <table border="1px;">
        <tr>
            <td>Name</td>
            <td>Phone </td>
            <td>Address</td>
        </tr>

        @foreach ($data as $data);
        <tr>
            <td>{{$data->fname}}</td>
            <td>{{$data->lname}}</td>
            <td>{{$data->apply}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>
@endsection