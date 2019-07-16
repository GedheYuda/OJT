@extends('layouts.layout')
@section('jd')
Lihat data barang
@endsection

@section('konten')
<div class="form-sign">
    <div class="text-center">
        <img src="{{url('storage/images/',$product->file)}}" alt="img" class="card-img-top" style="width: 50%; height: 50%;">
    </div>
    <div class="card-body">
        <h4 class="card-title text-center">Melihat data {{$product->name}}</h4>
        <div class="form-label-group">
            <label for="name">Nama barang</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" readonly>
        </div>
        <div class="form-label-group">
                <label for="price">Harga barang</label>
            <input type="text" name="price" id="price" class="form-control" value="Rp {{$product->price}}" readonly>
        </div>
        <div class="form-label-group">
            <label for="type">Tipe barang</label>
            <input type="text" name="type" id="type" class="form-control" value="{{$product->type}}" readonly>
        </div>
    </div>
</div>
@endsection
