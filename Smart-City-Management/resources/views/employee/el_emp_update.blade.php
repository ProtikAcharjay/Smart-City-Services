@extends('layouts.elemp_app')
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


  <div class="container">
    <div class="row">
        <div class="col" style="margin:40px 300px">

        <form action= "{{route('edit')}}" method="post">

            @csrf
          <h4>Update</h4>
                    <hr>
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

 
                 
                    <input type="hidden" class="form-control" name="el_id" value=  "{{$info->el_id}}" >      
            
    
  <div class="form-group">
      <label for="">Name</label>
    <input type="text" class="form-control" name="name" value=  "{{$info->el_name}}" >
      <span class="text-danger">@error('name'){{ $message }} @enderror</span>

  </div>


  <div class="form-group">
      <label for="">Phone</label>
      <input type="text" class="form-control" name="phone" value="{{$info->el_phone}}">
      <span class="text-danger">@error('phone'){{ $message }} @enderror</span>

  </div>


<div class="form-group">
    <label for="">Addess</label>
    <input type="text" class="form-control" name="address" value="{{$info->el_address}}">
    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
</div>


  <div class="form-group">
      <label for="">Date Of Birth</label>
      <input type="date" class="form-control" name="dob"value={{$info->el_dob}}>
      <span class="text-danger">@error('dob'){{ $message }} @enderror</span>

    </div>
    <div class="form-group">
        <label for="">Salary</label>
        <input type="text" class="form-control" name="salary" value="{{$info->el_salary}}">
        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    </div>

  <div class="form-group">
      <label for="">NID</label>
      <input type="text" class="form-control" name="nid" value="{{$info->el_nid}}">
      <span class="text-danger">@error('address'){{ $message }} @enderror</span>
  </div>

<div class="form-group">
    <label for="">Job Location</label>
    <input type="text" class="form-control" name="jobloc" value="{{$info->el_joblocation}}">
    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
</div>

<div class="form-group">
    <label for="">Status</label>
    <input type="text" class="form-control" name="status" value="{{$info->el_status}}">
    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
</div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">UPDATE</button>


  </div>
</form>



  </body>
</html>

@endsection
