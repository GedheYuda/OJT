<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('jd')</title>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>
    <link href= {{asset("bootstrap4/css/bootstrap.min.css")}} rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="card">
            @yield('konten')
        </div>
    </div>
</body>
</html>
