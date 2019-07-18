<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('jd')</title>

    <link href= {{asset("css/bootstrap.min.css")}} rel="stylesheet" />
    <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/all.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/main1.css')}}" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" style="text-align: center;">@yield('jd')</h2>
                    @yield('konten')
                </div>
            </div>
        </div>
    </div>
    <script>
        function prev(){
            var reader = new FileReader();
            reader.readAsDataURL(document.getElementById("pic").files[0]);

            reader.onload = function(event){
                document.getElementById("images").src = event.target.result;
            };
        };
    </script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
