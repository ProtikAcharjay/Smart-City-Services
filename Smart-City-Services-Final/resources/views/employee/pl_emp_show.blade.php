@extends('layouts.plemp_app')
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
<h5 style="text-align: right">Plumber</h5>

  

            <table class="table table-hover">
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
                        <th scope="row">{{$i->pl_id}}</th>
                    <td>{{$i->pl_name}}</td>
                    <td>{{$i->pl_phone}}</td>
                    <td>{{$i->pl_address}}</td>
                    <td>{{$i->pl_dob}}</td>
                    <td>{{$i->pl_salary}}</td>
                    <td>{{$i->pl_nid}}</td>
                    <td>{{$i->pl_joblocation}}</td>
                    <td>{{$i->pl_status}}</td>
                    <td>
                        <div class="btn-group">
                       <a href="delete/{{$i->pl_id}}" class="btn btn-danger btn-xs">Delete</a>
                       &nbsp
                       <a href="update/{{$i->pl_id}}" class="btn btn-primary btn-xs">Update</a>
                        </div>
                    </td>
                  </tr>
                    @endforeach
               
                
                  
                </tbody>
            </table>

  </body>
</html>

@endsection
