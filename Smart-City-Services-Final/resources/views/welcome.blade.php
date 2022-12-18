<!doctype html>
<html lang="en">
  <head>
    <title>Smart-City-Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
                margin: 0px;
                background: url("https://indiachapter.in/upload/thought/green-planet-your-hands-save-earth_1150-12729.jpg");
                background-size:1200px 600px;
                /* background-size:100%; */

                text-align: center;
                border-radius: 20px;
                margin: 10px;


            }

            #landing{


                color: white;
                border: 3px solid black;
                border-radius: 23px;
                height: 530px;
                width: 50%;
                margin: 4px 570px;
                padding: 22px 22px;
                z-index: 1;
            }
    </style>
  </head>
  <body>

    <div id="landing">
    <h3>Welcome to Smart-City-Services</h3>
    <h6>Smartly Provides Service</h6>

    <hr>
    <p>Started journey from 2022 and keep involving in a good way. Be a part of our journey & Get easy accessible services we provide.</p>
    <br>
    <hr>
    <div>
        <a class="btn btn-primary" href="{{route('auth.login')}}">Get Started</a>
        {{-- redirect('/auth/login'); --}}
    </div>
    <hr>


    <h6>Our Services: </h6>
    <li>Electrician</li>
    <li>Cleaner</li>
    <li>Plumber</li>
    <h6>More comming soon....</h6>
<br>
<br>
    <footer style="text-align: center">&copy; Copyright 2022 Smart-City-Services. All Rights Reserved </footer>
</div>

</body>
</html>
