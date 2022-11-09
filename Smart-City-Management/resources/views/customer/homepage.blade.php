@extends('layouts.customer_app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<h5 style="text-align: right">
    Welcome {{$loggeduserinfo['c_name']}}

</h5>
<div class="container">
    <div class="row">
        <div class="col" style="margin:20px 300px">

        <h3 style="text-align: center">Request Services</h3>
        <hr>
        <form action="{{ route('customer.homepage') }}" method="post">

            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif

            @csrf

            <div class="form-group">
                <label>Request Service for</label>
                <br>
                <input type="radio" id="elreq" name="reqtype" value="Electrician">
                <label for="el">Electrician</label>
                &nbsp
                <input type="radio" id="clreq" name="reqtype" value="Cleaner">
                <label for="cl">Cleaner</label>
                &nbsp
                <input type="radio" id="plreq" name="reqtype" value="Plumber">
                <label for="pl">Plumber</label>
                <br>
                <span class="text-danger">@error('reqtype'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label>Request Service Date & Time</label>
                <input type="datetime-local" class="form-control" name="reqdate" placeholder="Enter required service date">
                <span class="text-danger">@error('reqdate'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="reqaddress" placeholder="Enter your address" value="{{ old('reqaddress') }}">
                <span class="text-danger">@error('reqaddress'){{ $message }} @enderror</span>
            </div>

            <button type="submit" class="btn btn-block btn-primary"> Request</button>
            <br>




  </body>
</html>
@endsection
