@extends('layouts.layouts')
@section('jd')
Produk Kami
@endsection
@section('main')
<div class="container-fluid">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Katalog</h1>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active">Menu</li>
                <li class="list-group-item">
                    <a href="{{url('/outdoor')}}">Outdoor</a>
                </li>
                <li class="list-group-item">
                    <a href="{{url('/indoor')}}">Indoor</a>
                </li>
                <li class="list-group-item">
                    <a href="{{url('/accesories')}}">Accesories</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 text-center">
        <!-- Outdor Patio-set -->
        @foreach ($product->chunk(4) as $chunk)
            <div class="row">
                @foreach ($chunk as $prd)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{$prd->name}}</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-11">
                                        <img src="{{url('storage/images',$prd->file)}}"
                                        alt="Generic placeholder image" class="featurette-image img-responsive center-block"
                                        data-src="holder.js/800x800/auto" style="width: 80%; height: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
