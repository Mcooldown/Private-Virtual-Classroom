@extends('layouts.layout')

@section('content')
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand mr-auto ml-auto" href="/"><img src="/storage/img/pvc-logo.png" alt=""></a>
</nav>

<div class="container login-section">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <h3 class="text-left">Move Education Forward
                with Us</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter your valid email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">

                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">

                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm"
                        placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input type="text" name="phone_number" class="form-control" id="phone_number"
                        placeholder="Enter Your Phone Number">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

        </div>
        <div class="col-lg-6 col-md-6">
            <img src="/storage/img/login-img.png" alt="" class="img-fluid p-1">
        </div>
    </div>
</div>
@endsection