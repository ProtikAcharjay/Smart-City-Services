@extends('layouts.admin_app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
  #welad{
    color: blue;
  }
    </style>

  </head>
  <body>

    <div class="container">
        <h3 style="text-align: right" id="welad" >Welcome Admin</h3>
        <div class="row">
            <div class="col" style="margin:30px 300px">



            <form action= {{ route('admin.addemPage') }} method="post">

                <h4>Add Employee</h4>
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
                    <input type="radio" id="electracian" name="addtype" value="Electracian">
                    <label for="admin">Electracian</label>
                    &nbsp
                    <input type="radio" id="eleaner" name="addtype" value="Cleaner">
                    <label for="employee">Cleaner</label>
                    &nbsp
                    <input type="radio" id="plumber" name="addtype" value="Plumber">
                    <label for="customer">Plumber</label>
                    <span class="text-danger">@error('logintype'){{ $message }} @enderror</span>


                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>

                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone">
                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>

                </div>

                <div class="form-group">
                    <label for="">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob">
                    <span class="text-danger">@error('dob'){{ $message }} @enderror</span>

                </div>
                <div class="form-group">
                    <label for="">Addess</label>
                    <input type="text" class="form-control" name="address">
                    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password">

                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>


                </div>
            </form>
        </div>
        </div>

    </div>


  </body>
</html>
@endsection
