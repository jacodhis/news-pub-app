@extends('layouts.admin')

@section('title', 'Edit PDF Archive')
@section('page-title', 'Edit Archive')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin-archives.index') }}">Archives</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="form-container">
            <h4 class="mb-4">
                <i class="bi bi-pencil-square me-2"></i>
                Edit PDF Archive
            </h4>

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('admin-archives.update', $archive->id) }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                @csrf
                @method('PUT')



                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic Information -->
                        <div class="mb-4">
                            <h6 class="border-bottom pb-2 mb-3">Basic Information</h6>

                            <div class="mb-3">
                                <label for="title" class="form-label">Archive Title *</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ old('title', $archive->title) }}" required
                                       placeholder="e.g., The Continent - Issue #224 - January 2024">
                                <small class="form-text text-muted">Descriptive title for the archive</small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="publication_date" class="form-label">Publication Date *</label>
                                        <input type="date" class="form-control" id="publication_date"
                                               name="publication_date"
                                               value="{{ old('publication_date', $archive->publication_date->format('Y-m-d')) }}"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PDF File Upload -->
                        <div class="mb-4">
                            <h6 class="border-bottom pb-2 mb-3">PDF Document</h6>

                            <h6 id="fileName" class="mb-1">{{ asset('storage/'. $archive->pdf_path) }}</h6>

                            <div class="file-upload-area" id="pdfUploadArea">
                                <i class="bi bi-cloud-arrow-up"></i>
                                <h5>Drop PDF file here or click to browse</h5>
                                <p class="text-muted">Maximum file size: 100MB. Supported format: PDF only.</p>
                                <input type="file" id="pdf_file" name="pdf_file" accept=".pdf" class="d-none">

                                <!-- Show existing PDF -->
                                @if($archive->pdf_path)
                                    <div id="filePreview" class="mt-3 d-flex align-items-center bg-light p-3 rounded">
                                        <i class="bi bi-file-earmark-pdf text-danger fs-1 me-3"></i>

                                        <button type="button" class="btn btn-sm btn-outline-danger ms-auto" id="removeFile">
                                            <i class="bi bi-x"></i>
                                        </button>
                                    </div>
                                @else
                                <div id="filePreview" class="mt-3" style="display: none;"></div>
                                @endif

                                <button type="button" class="btn btn-outline-primary mt-3" id="browseBtn">
                                    <i class="bi bi-folder2-open"></i> Browse Files
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Thumbnail Upload -->
                        <div class="mb-4">
                            <h6 class="border-bottom pb-2 mb-3">Thumbnail Image</h6>

                            <div class="file-upload-area" id="thumbnailUploadArea">
                                <i class="bi bi-image"></i>
                                <p>Upload thumbnail image (Optional)</p>
                                <p class="text-muted small">Recommended: 300x400px, JPG/PNG</p>
                                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="d-none">

                                @if($archive->thumbnail_path)
                                <div id="thumbnailPreview" class="mt-3">
                                    <img id="thumbnailImage" src="{{ asset('storage/' . $archive->thumbnail_path) }}"
                                         class="img-fluid rounded"
                                         style="max-height: 150px;">
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-2"
                                            id="removeThumbnail">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                </div>
                                @else
                                <div id="thumbnailPreview" class="mt-3" style="display: none;">
                                    <img id="thumbnailImage" src="" class="img-fluid rounded" style="max-height: 150px;">
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-2" id="removeThumbnail">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                </div>
                                @endif

                                <button type="button" class="btn btn-outline-secondary mt-2" id="browseThumbnail">
                                    <i class="bi bi-image"></i> Select Image
                                </button>
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"
                                value="1" {{ old('is_featured', $archive->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">Mark as Featured</label>
                        </div>

                        <!-- Quick Actions -->
                        <div class="sticky-top" style="top: 20px;">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                    <i class="bi bi-pencil-square"></i> Update Archive
                                </button>
                                <a href="{{ route('admin-archives.index') }}" class="btn btn-outline-danger">
                                    <i class="bi bi-x-circle"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
