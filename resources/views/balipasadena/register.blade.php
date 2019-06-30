@extends('layouts.auth')
@section('jd')
Register
@endsection
@section('konten')
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
    @if (session()->get('message'))
    <div class="alert alert-danger">
        {{session()->get('message')}}
    </div>
    @endif
</div>
<form  method="POST" class="form-signin"action="{{url('/repost')}}">
    @csrf
    <div class="form-label-group">
        <input type="text" id="" name="name" class="form-control" placeholder="Nama" required autofocus>
        <label for="name">Nama</label>
    </div>
    <div class="form-label-group">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="email">Email</label>
    </div>
    <div class="form-label-group">
        <input type="text" id="age" name="age" class="form-control" placeholder="Usia" required autofocus>
        <label for="age">Usia</label>
    </div>
    <div class="form-label-group">
        <input type="text" id="address" name="address" class="form-control" placeholder="Alamat" required autofocus>
        <label for="address">Alamat</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password min 8" required>
        <label for="password">Password</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password2" name="password2" class="form-control" placeholder="Ulangi Password" required>
        <label for="password2">Ulangi Password</label>
    </div>
    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Remember password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-uppercase" type="submit">Register</button>
    <hr class="my-4">
    <p style="text-align:center;">Sudah punya akun</p>
    <hr class="my-4">
    <a href="{{url('/login')}}" class="btn btn-lg btn-secondary btn-block btn-uppercase">Login</a>
</form>
@endsection
