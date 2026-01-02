@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Users Management')

@section('breadcrumb')
    <li class="breadcrumb-item active">Users</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">All Users</h5>

        {{-- @can('users.create') --}}
            <a href="{{ route('users.create') }}" class="btn btn-primary">
                + Add User
            </a>
        {{-- @endcan --}}
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Created At</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            {{-- Roles --}}
                            <td>
                                @forelse($user->roles as $role)
                                    <span class="badge bg-primary">
                                        {{ $role->name }}
                                    </span>
                                @empty
                                    <span class="badge bg-secondary">No Role</span>
                                @endforelse
                            </td>

                            <td>{{ $user->created_at->format('d M Y') }}</td>

                            <td>
                                @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                @endcan

                                @can('users.delete')
                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-3">
            {{ $users->links() }}
        </div>
    </div>
</div>

@endsection
