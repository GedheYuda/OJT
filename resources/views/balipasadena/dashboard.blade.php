@extends('layouts.dashboard')
@section('jd')
<div class="text-center">
<h3>Data Balipasadena</h3>
</div>
@endsection
@section('konten')
<br>
<p class="text-center mb-4">Selamat datang {{Session::get('name')}}</p>
<style type="text/css">
.upper{
    margin-top: 40px;
}
.stip{
    text-align: center;
    font-style: italic;
    font-size: 2em;
}
</style>
<div class="upper">
    @if (session()->get('success'))
    <div class="alert alert-success">
        <div class="text-center">
            {{session()->get('success')}}
        </div>
    </div>
    @else
        @if (session()->get('message'))
        <div class="alert alert-danger">
            <div class="text-center">
                {{session()->get('message')}}
            </div>
        </div>
        @endif
    @endif
</div>
<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr class="bg-primary text-white">
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Tipe Barang</th>
            <th>File Gambar</th>
            <th style="text-align:center;">Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="bg-primary text-white">
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Tipe Barang</th>
            <th>File Gambar</th>
            <th style="text-align:center;">Action</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($product as $prd)
        <tr>
            <td>{{$prd->name}}</td>
            <td>Rp {{$prd->price}}</td>
            <td>{{$prd->type}}</td>
            <td>{{$prd->file}}</td>
            <td style="text-align:center;">
                <!--<span><a href="{{url('/show'.$prd->id)}}" class="btn btn-secondary" target="_blank">Lihat barang</a></span>-->
                <span><a href="{{url('/edit'.$prd->id)}}" class="btn btn-warning" target="_blank">Edit barang</a></span>
                <span><a href="{{url('/delete'.$prd->id)}}" class="btn btn-danger">Hapus barang</a></span>
                <span><a href="{{url('/edfot'.$prd->id)}}" class="btn btn-primary" target="_blank">Edit foto barang</a></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
