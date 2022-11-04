<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col" style="margin:100px 300px">

            <h3 style="text-align: center">Login</h3>
            <hr>
            <form action="{{ route('auth.login') }}" method="post">

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif

                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Login As</label>
                    <br>
                    <input type="radio" id="admin" name="logintype" value="Admin">
                    <label for="admin">Admin</label>
                    &nbsp
                    <input type="radio" id="customer" name="logintype" value="Customer">
                    <label for="customer">Customer</label>

                    <input type="radio" id="elemp" name="logintype" value="Elemp">
                    <label for="elemp">Electrician Employee</label>
                    &nbsp
                    <input type="radio" id="clemp" name="logintype" value="Clemp">
                    <label for="clemp">Cleaner Employee</label>
                    &nbsp
                    <input type="radio" id="plemp" name="logintype" value="Plemp">
                    <label for="plemp">Plumber Employee</label>
                    <span class="text-danger">@error('logintype'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary"> Sign in</button>
                <br>
                <a href="{{ route('auth.register') }}">Don't Have An Account? Create here</a>


            </form>
        </div>
        </div>

    </div>

  </body>
</html>
