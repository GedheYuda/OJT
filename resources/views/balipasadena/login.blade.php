@extends('layouts.auth')

@section('jd')
Sign in
@endsection

@section('konten')
<form class="form-signin" action="{{action('LoginController@login')}}" method="post">
        @csrf
        @method('POST')
    <div class="form-label-group">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="email">Email</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <label for="password">Password</label>
    </div>
    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Remember password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-uppercase" type="submit">Sign in</button>
</form>
@endsection
