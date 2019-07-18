@extends('layouts.layout')
@section('jd')
Edit Foto Data Barang
@endsection

@section('konten')
<form action="{{url('/upfot'.$product->id)}}" method="post" enctype="multipart/form-data" class="form-sign">
    @csrf
    @method('POST')
    <div class="text-center">
        <img src="{{url('storage/images/'.$product->file)}}" id="images" alt="img" class="card-img-top" style="width: 50%; height: 50%;">
        <p>Nama gambar {{$product->file}}</p>
        <div class="row row-space">
            <div class="col-2">
                <div class="text-center">
                    <div class="input-group">
                        <label for="pic" class="label">Salin gambar</label>
                        <input class="input--style-4" name="pic" id="pic" type="file" onchange="prev()" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn--radius-2 btn--blue">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
