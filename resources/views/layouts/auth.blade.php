<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<link href="{{asset('bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/Sign in.css')}}" rel="stylesheet">
		<title>@yield('jd')</title>
	</head>
	<body>
		<div class="container">
            <div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
                        @yield('konten')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
