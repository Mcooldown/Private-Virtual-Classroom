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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required autofocus>

                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required>

                    @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>

        </div>
        <div class="col-lg-6 col-md-6 p-1">
            <img src="/storage/img/login-img.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection