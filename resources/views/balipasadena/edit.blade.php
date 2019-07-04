@extends('layouts.layout')
@section('jd')
Edit Data Barang
@endsection

@section('konten')
<div class="card-body">
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>
<form method="POST" action="{{url('/update'.$product->id)}}" enctype="multipart/form-data">
	@csrf
	<div class="row row-space">
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="name">Nama Barang</label>
                <input class="input--style-4" type="text" name="name" id="name" value="{{$product->name}}">
			</div>
		</div>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="price">Harga Barang</label>
				<input class="input--style-4" type="text" name="price" id="price" value="{{$product->price}}">
			</div>
		</div>
	</div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="type">Tipe Barang</label>
            <input class="input--style-4" type="text" name="type" id="type" value="{{$product->type}}">
        </div>
    </div>
	<div class="row row-space">
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="pic">Gambar Barang</label>
				<input class="input--style-4" type="file" name="pic" id="pic">
			</div>
		</div>
	</div>
	<div class="col-4">
 	<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
 </div>
</div>
</form>
@endsection
