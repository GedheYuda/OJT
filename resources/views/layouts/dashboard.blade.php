<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{asset('Img/logo/logo.png')}}" />
        <title>Bali Pasadena</title>

        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap4/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
        <script src="{{asset('js/datatables-demo.js')}}"></script>
    </head>
    <body>
        <div class="bg-light border-bottom shadow-sm sticky-top">
            <div class="container-fluid">
                <header class="blog-header py-1">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li itemscope="itemscope" id="menu-item-17" class="active nav-item nav-link"><a title="Home" href="{{url('/')}}">Home</a></li>
                                <li itemscope="itemscope" id="menu-item-16" class="nav-item nav-link"><a title="Create" href="{{url('/create')}}">Tambah Barang</a></li>
                                <li itemscope="itemscope" id="menu-item-15" class="nav-item nav-link"><a title="Logout" href="{{url('/logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary m-0 font-weight-bold">@yield('jd')</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @yield('konten')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
