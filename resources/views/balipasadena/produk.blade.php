@extends('layouts.layouts')
@section('jd')
Our Product
@endsection
@section('main')
<div class='container-fluid'>
    <div class='jumbotron'>
        <div class='row'>
            <div class='col-md-12'>
            <h1 class='text-center'>Our Products</h1>
        </div>
    </div>
</div>
<hr />
<!-- Outdor Patio-set-->
@foreach($product->chunk(3) as $chunk)
    <div class='row'>
        @foreach ($chunk as $prd)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$prd->name}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url('storage/images/',$prd->file)}}"
                                class="featurette-image img-responsive center-block"
                                data-src="holder.js/200x200/auto"
                                alt="Generic placeholder image" />
                            </div>
                            <div class="col-md-8">
                                <p class="text-left">
                                    <span class="label  label-default">Harga:</span>Rp{{$prd->price}}
                                </p>
                                <p class="text-left">
                                    <span class="label  label-default">Tipe :</span>{{$prd->type}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
<hr class='featurette-divider' />
@endsection
