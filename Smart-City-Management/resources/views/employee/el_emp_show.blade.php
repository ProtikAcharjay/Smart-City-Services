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
<h5 style="text-align: right">Electrician Employee</h5>



            <table class="table table=hover">
                <thead>
                    <th scope="col">#</th>
                    <th >Name</th>
                    <th >Phone</th>
                    <th >Address</th>
                    <th >DOB</th>
                    <th >Salary</th>
                    <th >NID</th>
                    <th >Job Location</th>
                    <th >Status</th>
                    <th >Actions</th>

                </thead>
                <tbody>
                    @foreach ($list as $i)
                    <tr>
                        <th scope="row">{{$i->el_id}}</th>
                    <td>{{$i->el_name}}</td>
                    <td>{{$i->el_phone}}</td>
                    <td>{{$i->el_address}}</td>
                    <td>{{$i->el_dob}}</td>
                    <td>{{$i->el_salary}}</td>
                    <td>{{$i->el_nid}}</td>
                    <td>{{$i->el_joblocation}}</td>
                    <td>{{$i->el_status}}</td>
                    <td>
                        <div class="btn-group">
                       <a href="delete/{{$i->el_id}}" class="btn btn-danger btn-xs">Delete</a>
                       &nbsp
                       <a href="update/{{$i->el_id}}" class="btn btn-primary btn-xs">Update</a>
                        </div>
                    </td>
                  </tr>
                    @endforeach



                </tbody>
            </table>

  </body>
</html>

@endsection
