<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="site-url" content="{{ url('/') }}">
    <title>Chandraghona Hub</title>

    <link rel="stylesheet" href="{{ asset('public/frontend/src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/frontend_style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>

    <div id="app_frontend">
        <master></master>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{ asset('public/js/app_frontend.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{asset('public/frontend/src/js/bootstrap.min.js')}}"></script>
</body>
</html>
