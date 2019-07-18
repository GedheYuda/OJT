@extends('layouts.layout')
@section('jd')
Tambah Data Barang
@endsection

@section('konten')
<form method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
    @csrf
    @method('POST')
	<div class="row row-space">
        <div class="col-4">
            <div class="text-center">
                <img src="" id="images" class="card-img-top" style="width: 50%; height: 50%;">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="name">Nama Barang</label>
				<input class="input--style-4" type="text" name="name" id="name" required>
			</div>
		</div>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="price">Harga Barang</label>
				<input class="input--style-4" type="text" name="price" id="price" required>
			</div>
		</div>
	</div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="type">Tipe Barang</label>
            <select name="type" id="type" class="input--style-4">
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
                <option value="accesories">Accesories</option>
            </select>
        </div>
    </div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="pic">Gambar Barang</label>
            <input class="input--style-4" type="file" name="pic" id="pic" onchange="prev()" accept="image/*" required>
        </div>
    </div>
    <div class="col-4">
 	<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
 </div>
</div>
</form>
@endsection

