@extends('layouts.layout')
@section('jd')
Edit Data Barang
@endsection

@section('konten')
<form method="POST" action="{{url('/update'.$product->id)}}">
    @csrf
    @method("POST")
    <div class="row row-space">
        <div class="col-2">
			<div class="input-group">
				<label class="label" for="name">Nama Barang</label>
                <input class="input--style-4" type="text" name="name" id="name" value="{{$product->name}}" required>
			</div>
		</div>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="price">Harga Barang</label>
				<input class="input--style-4" type="text" name="price" id="price"  value="{{$product->price}}" required>
			</div>
		</div>
	</div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="type">Tipe Barang</label>
            <select name="type" id="type" class="input--style-4">
                @if ($product->type == "indoor")
                    <option value="indoor" selected>Indoor</option>
                    <option value="outdoor">Outdoor</option>
                    <option value="accesories">Accesories</option>
                @else
                    @if ($product->type == "outdoor")
                        <option value="indoor">Indoor</option>
                        <option value="outdoor" selected>Outdoor</option>
                        <option value="accesories">Accesories</option>
                    @else
                        <option value="indoor">Indoor</option>
                        <option value="outdoor">Outdoor</option>
                        <option value="accesories" selected>Accesories</option>
                    @endif
                @endif
            </select>
        </div>
    </div>
    <div class="col-4">
        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
    </div>
</div>
</form>
@endsection
