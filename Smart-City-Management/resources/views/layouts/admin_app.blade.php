<html>
    <head>
        <title>Admin</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
            @include('inc.admin_nav')
            <div>
                @yield('content')
            </div>
        </div>
        <footer style="text-align: center">&copy; Copyright 2022 Smart-City-Services. All Rights Reserved </footer>
    </body>
    </html>
