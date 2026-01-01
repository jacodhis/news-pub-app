@extends('layouts.admin')

@section('title', 'Manage Archives')
@section('page-title', 'PDF Archives Management')

@section('breadcrumb')
    <li class="breadcrumb-item active">Archives</li>
@endsection

@section('content')
<div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="table-title mb-0">All PDF Archives</h5>
        <a href="{{ route('admin-archives.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Upload New PDF
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Search and Filters -->
    <div class="row mb-4">
        <div class="col-md-4">
            <form action="{{ route('admin-archives.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control"
                           placeholder="Search archives..." value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="d-flex gap-2 justify-content-end">
                {{-- <select class="form-select w-auto" id="categoryFilter">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select> --}}
                <select class="form-select w-auto" id="statusFilter">
                    <option value="">All Status</option>
                    <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="featured" {{ request('featured') == '1' ? 'selected' : '' }}>Featured</option>
                </select>
                @if(request()->hasAny(['search', 'category_id', 'status', 'featured']))
                <a href="{{ route('admin-archives.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle"></i> Clear Filters
                </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Archives Table -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="80">Preview</th>
                    <th>Title & Details</th>
                    <th>Uploaded By</th>
                    <th>Publication Date</th>
                    <th>File Info</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($archives as $archive)
                <tr>
                    <td>
                        @if($archive->thumbnail_path)
                            <img src="{{ Storage::url($archive->thumbnail_path) }}"
                                 alt="Thumbnail"
                                 class="pdf-thumbnail">
                        @else
                            <div class="pdf-thumbnail">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $archive->title }}</strong>
                        <p class="text-muted mb-0 mt-1 small">
                            <i class="bi bi-calendar"></i>
                            {{ $archive->created_at->format('M d, Y') }}

                        </p>

                    </td>
                    <td>
                        @if($archive->user)
                                {{ $archive->user->name }}
                        @endif
                    </td>
                    <td>
                        {{ $archive->publication_date->format('M d, Y') }}
                    </td>
                    <td>
                        <small class="d-block">
                            <i class="bi bi-hdd"></i>
                            {{ number_format($archive->pdf_size / 1024 / 1024, 2) }} MB
                        </small>
                        <small class="d-block text-muted">
                            <i class="bi bi-file-earmark"></i>
                            {{ pathinfo($archive->pdf_path, PATHINFO_EXTENSION) }}
                        </small>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-1">
                            @if($archive->is_published)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning">Draft</span>
                            @endif

                            @if($archive->is_featured)
                                <span class="badge bg-primary">Featured</span>
                            @endif

                            @if($archive->is_archived)
                                <span class="badge bg-secondary">Archived</span>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('admin-archives.edit', $archive->id) }}"
                               class="btn btn-outline-primary" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="{{ Storage::url($archive->pdf_path) }}"
                               target="_blank"
                               class="btn btn-outline-success" title="View PDF">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button type="button"
                                    class="btn btn-outline-info dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <span class="visually-hidden">More</span>
                            </button>
                            <ul class="dropdown-menu">
                                {{-- <li>
                                    <form action="{{ route('admin.archives.toggle-publish', $archive->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-{{ $archive->is_published ? 'eye-slash' : 'eye' }}"></i>
                                            {{ $archive->is_published ? 'Unpublish' : 'Publish' }}
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('admin.archives.toggle-featured', $archive->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-star{{ $archive->is_featured ? '-fill' : '' }}"></i>
                                            {{ $archive->is_featured ? 'Remove Featured' : 'Mark as Featured' }}
                                        </button>
                                    </form>
                                </li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('admin-archives.destroy', $archive->id) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="dropdown-item text-danger delete-btn"
                                                onclick="return confirm('Are you sure you want to delete this archive? This action cannot be undone.')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-5">
                        <div class="text-muted">
                            <i class="bi bi-file-earmark-pdf" style="font-size: 48px;"></i>
                            <h5 class="mt-3">No PDF archives found</h5>
                            <p>Upload your first PDF to get started</p>
                            <a href="{{ route('admin-archives.create') }}" class="btn btn-primary mt-2">
                                <i class="bi bi-plus-circle"></i> Upload PDF
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-center mt-4">
            {{ $archives->links() }}
        </div>
    </div>
</div>


    </div>


</div>
@endsection

@section('styles')
<style>
    .pdf-thumbnail {
        width: 60px;
        height: 80px;
        object-fit: cover;
        border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .pdf-thumbnail.bi {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
    }
</style>
@endsection

@section('scripts')
<script>
    // Filter functionality
    document.getElementById('categoryFilter').addEventListener('change', function() {
        const categoryId = this.value;
        updateUrl('category_id', categoryId);
    });

    document.getElementById('statusFilter').addEventListener('change', function() {
        const status = this.value;
        if (status === 'featured') {
            updateUrl('featured', '1');
        } else {
            updateUrl('status', status);
        }
    });

    function updateUrl(key, value) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);

        if (value) {
            params.set(key, value);
        } else {
            params.delete(key);
        }

        // Remove conflicting filters
        if (key === 'status' && value !== 'featured') {
            params.delete('featured');
        }
        if (key === 'featured' && value === '1') {
            params.delete('status');
        }

        window.location.href = url.pathname + '?' + params.toString();
    }

    // Auto-close alerts after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
</script>
@endsection
