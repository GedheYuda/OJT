@extends('layouts.auth')

@section('jd')
Sing In
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
<div class="card-body">
    <h5 class="card-title text-center">Sign In</h5>
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
    <form class="form-signin" action="{{url('/logpost')}}" method="post">
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
</div>
@endsection
