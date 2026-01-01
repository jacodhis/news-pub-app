@extends('layouts.admin')

@section('title', 'Categories')
@section('page-title', 'News Categories')

@section('breadcrumb')
    <li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <!-- Add Category Form -->
        <div class="form-container">
            <h5 class="mb-4">Add New Category</h5>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name *</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Add Category
                </button>
            </form>
        </div>
    </div>

    <div class="col-md-8">
        <!-- Categories List -->
        <div class="table-container">
            <h5 class="table-title">All Categories</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Archives</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <strong>{{ $category->name }}</strong>
                                </div>
                            </td>

                            <td>
                                <span class="badge bg-secondary">{{ $category->archives_count ?? 0 }} PDFs</span>
                            </td>
                            <td>
                                <small>{{ $category->created_at->format('M d, Y') }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm gap-3">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger delete-btn">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
