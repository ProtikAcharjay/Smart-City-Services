@extends('layouts.clemp_app')
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
<h5 style="text-align: right">Cleaner</h5>

  

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
                        <th scope="row">{{$i->cl_id}}</th>
                    <td>{{$i->cl_name}}</td>
                    <td>{{$i->cl_phone}}</td>
                    <td>{{$i->cl_address}}</td>
                    <td>{{$i->cl_dob}}</td>
                    <td>{{$i->cl_salary}}</td>
                    <td>{{$i->cl_nid}}</td>
                    <td>{{$i->cl_joblocation}}</td>
                    <td>{{$i->cl_status}}</td>
                    <td>
                        <div class="btn-group">
                       <a href="delete/{{$i->cl_id}}" class="btn btn-danger btn-xs">Delete</a>
                       &nbsp
                       <a href="update/{{$i->cl_id}}" class="btn btn-primary btn-xs">Update</a>
                        </div>
                    </td>
                  </tr>
                    @endforeach
               
                
                  
                </tbody>
            </table>

  </body>
</html>

@endsection
