@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card"  >
                <div class=" lgn card-header">{{ __('Login') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3" >
                            <label for="email"  class=" label col-md-4 col-form-label text-md-end">{{ __('Adresse Email :') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Entrez Votre Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class=" label col-md-4 col-form-label text-md-end">{{ __('Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password"  placeholder="Entrez Votre Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class=" form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="txt-check check form-check-label"  for="remember" >
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class=" tst btn btn-light btn-outline-dark">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-tst">

<a href="https://www.facebook.com/profile.php?id=100004385011659"><img src="inst2.png" class="img-footer" ></a>
<a href="https://www.facebook.com/profile.php?id=100004385011659"><img src="fb.png" class="img-footer"></a>
<a href="https://www.facebook.com/profile.php?id=100004385011659"><img src="wtp2.png" class="img-footer"></a>
<a href="https://www.facebook.com/profile.php?id=100004385011659"><img src="Lk.png" class="img-footer"> </a>


</div>
@endsection


@section('styles')
    <style>
        body {
            background-image: url('data:image/png;https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fnature%2F&psig=AOvVaw02SnDMtHAJI0NuJl43KL2L&ust=1684359439682000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCNi6w6jl-v4CFQAAAAAdAAAAABAE');
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection