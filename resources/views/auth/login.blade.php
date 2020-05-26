@extends('layouts.app')

@section('content')
<div class="uk-flex uk-flex-middle uk-flex-column uk-flex-center" uk-height-viewport>
    <div class="uk-card uk-card-body uk-card-default uk-margin-large-bottom uk-width-large">
        <div class="uk-card-title uk-text-center">Welcome Back</div>

        <div class="card-body">
            <form class="uk-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="uk-margin">
                    <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span role="alert">
                            <strong class="uk-text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="uk-margin">
                    <label for="password" class="uk-form-label">{{ __('Password') }}</label>

                    <div class="">
                        <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span role="alert">
                                <strong class="uk-text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin-top">
                    <div class="uk-child-width-1-2@s uk-grid-small uk-text-center uk-text-left@s" uk-grid>
                        <div class="form-check">
                            <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
