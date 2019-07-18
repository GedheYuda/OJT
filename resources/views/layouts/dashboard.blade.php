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
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap4/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <a title="Home" href="{{url('/product')}}" class="navbar-brand" target="_blank">Halaman Produk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="{{url('/dashboard')}}" class="nav-link">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/dashboard/create')}}" class="nav-link">Tambah Barang <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/dashboard/register')}}" class="nav-link">Tambah Admin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/logout')}}" class="nav-link">Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        </nav>
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
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/datatables-demo.js')}}"></script>
        <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>
    </body>
</html>
