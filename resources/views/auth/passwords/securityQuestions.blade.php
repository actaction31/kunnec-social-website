@extends('layouts.app')
@section('additional-css')
    <title>Security Questions</title>
    <link href="{{ asset('public/css/log_sign.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container_fp d-flex align-items-start justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Security Questions') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @error('status')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <form method="POST" action="{{ route('pass.securityVerify',['username'=>$user->username]) }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Email:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" placeholder="Email"required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 mb-2">
                            <label>{{ $user->ques1 }}</label>
                            <input id="ans1" type="text" class="form-control @error('ans1') is-invalid @enderror" name="ans1" value="{{ old('ans1') }}" placeholder="Answer" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-md-12 mb-2">
                            <label>{{ $user->ques2 }}</label>
                            <input id="ans2" type="text" class="form-control @error('ans2') is-invalid @enderror" name="ans2" value="{{ old('ans2') }}" placeholder="Answer" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-md-12 mb-2">
                            <label>{{ $user->ques3 }}</label>
                            <input id="ans3" type="text" class="form-control @error('ans3') is-invalid @enderror" name="ans3" value="{{ old('ans3') }}" placeholder="Answer" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Submit') }}
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