@extends('layouts.app')

@section('content')
<div class="uk-flex uk-flex-middle uk-flex-column uk-flex-center" uk-height-viewport>
    <img class="uk-margin-bottom" src="/img/logo-alt.png" alt="{{ config('app.name', 'Laravel') }}">

    <div class="uk-card uk-card-body uk-card-default uk-margin-large-bottom uk-width-large">
        <div class="uk-card-title uk-text-center auth-title">Reset Password</div>

        <div class="card-body">

            @if (session('status'))
                <div class="uk-text-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="uk-margin">
                    <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="uk-margin-small">
                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
