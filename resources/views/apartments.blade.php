<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <h1>SweetHome</h1>
</div>

<div class="topnav">
    <a href="#">Home</a>
    <a href="#">Best Home</a>
    <a href="#">Life style</a>
    <a href="#">About us</a>
    <a href="#">Contact us</a>
    <i style="font-size:24px" class="fa">&#xf002;</i>
</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
        </div>
        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
        </div>
    </div>

    <ul>
        @foreach($list as $item)
            <li>{{$item -> name}}</li>
        @endforeach
    </ul>
    {!! $list -> links() !!}
<p>Aptech FPT &copy; Copyright 2018</p>
</div>
</body>
</html>
