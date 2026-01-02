@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0 rounded-3">
            <div class="card-header text-center bg-primary text-white fs-5 fw-bold">
                {{ __('Login To Milestone Badge') }}
            </div>

            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">
                            {{ __('Email Address') }}
                        </label>

                        <input
                            id="email"
                            type="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Enter email"
                            autofocus
                        >

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">
                            {{ __('Password') }}
                        </label>

                        <input
                            id="password"
                            type="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="Enter Password"
                            required
                        >

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
