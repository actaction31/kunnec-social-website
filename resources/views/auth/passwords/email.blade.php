@extends('layouts.app')
@section('additional-css')
    <title>Password Reset</title>
    <link href="{{ asset('public/css/log_sign.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container_fp d-flex align-items-start justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Reset Password') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-js')
@endsection