@extends('layouts.admin')

@section('title', 'Edit User')
@section('page-title', 'Edit User')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">Users</a>
    </li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                {{-- Name --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $user->name) }}"
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email"
                           name="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email', $user->email) }}"
                           required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password (optional) --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Password
                        <small class="text-muted">(leave blank to keep current)</small>
                    </label>
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password"
                           name="password_confirmation"
                           class="form-control">
                </div>

                {{-- Role --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Role</label>
                    <select name="role"
                            class="form-select @error('role') is-invalid @enderror"
                            required>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}"
                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    Update User
                </button>

                <a href="{{ route('users.index') }}" class="btn btn-light">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
