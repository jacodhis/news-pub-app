@extends('layouts.admin')

@section('title', 'Upload New PDF')
@section('page-title', 'Upload News Archive')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin-archives.index') }}">Archives</a></li>
    <li class="breadcrumb-item active">Upload</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="form-container">
            <h4 class="mb-4">
                <i class="bi bi-cloud-arrow-up me-2"></i>
                Upload New PDF Archive
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

            <form action="{{ route('admin-archives.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                @csrf

                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic Information -->
                        <div class="mb-4">
                            <h6 class="border-bottom pb-2 mb-3">Basic Information</h6>

                            <div class="mb-3">
                                <label for="title" class="form-label">Archive Title *</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ old('title') }}" required
                                       placeholder="e.g., The Continent - Issue #224 - January 2024">
                                <small class="form-text text-muted">Descriptive title for the archive</small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="publication_date" class="form-label">Publication Date *</label>
                                        <input type="date" class="form-control" id="publication_date"
                                               name="publication_date"
                                               value="{{ old('publication_date', date('Y-m-d')) }}"
                                               required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- PDF File Upload -->
                        <div class="mb-4">
                            <h6 class="border-bottom pb-2 mb-3">PDF Document *</h6>

                            <div class="file-upload-area" id="pdfUploadArea">
                                <i class="bi bi-cloud-arrow-up"></i>
                                <h5>Drop PDF file here or click to browse</h5>
                                <p class="text-muted">Maximum file size: 100MB. Supported format: PDF only.</p>
                                <input type="file" id="pdf_file" name="pdf_file"
                                       accept=".pdf" class="d-none" required>
                                <div id="filePreview" class="mt-3" style="display: none;">
                                    <div class="d-flex align-items-center bg-light p-3 rounded">
                                        <i class="bi bi-file-earmark-pdf text-danger fs-1 me-3"></i>
                                        <div>
                                            <h6 id="fileName" class="mb-1"></h6>
                                            <small id="fileSize" class="text-muted"></small>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-danger ms-auto"
                                                id="removeFile">
                                            <i class="bi bi-x"></i>
                                        </button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary mt-3" id="browseBtn">
                                    <i class="bi bi-folder2-open"></i> Browse Files
                                </button>
                            </div>

                            <div class="mt-3">
                                <div class="progress" style="height: 6px; display: none;" id="uploadProgress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                </div>
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
                                {{-- <p class="text-muted small">Recommended: 300x400px, JPG/PNG</p> --}}
                                <input type="file" id="thumbnail" name="thumbnail"
                                       accept="image/*" class="d-none">
                                <div id="thumbnailPreview" class="mt-3" style="display: none;">
                                    <img id="thumbnailImage" src=""
                                         class="img-fluid rounded"
                                         style="max-height: 150px;">
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-2"
                                            id="removeThumbnail">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                </div>
                                <button type="button" class="btn btn-outline-secondary mt-2" id="browseThumbnail">
                                    <i class="bi bi-image"></i> Select Image
                                </button>
                            </div>
                        </div>



                        <!-- Quick Actions -->
                        <div class="sticky-top" style="top: 20px;">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                    <i class="bi bi-upload"></i> Upload Archive
                                </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-clockwise"></i> Reset Form
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

@section('styles')
<style>
    .file-upload-area {
        border: 2px dashed #dee2e6;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s;
        cursor: pointer;
    }

    .file-upload-area:hover {
        border-color: #3498db;
        background-color: rgba(52, 152, 219, 0.05);
    }

    .file-upload-area i {
        font-size: 48px;
        color: #6c757d;
        margin-bottom: 15px;
    }

    #uploadProgress {
        border-radius: 3px;
    }

    .progress-bar {
        transition: width 0.3s ease;
    }
</style>
@endsection

{{-- @section('scripts')
<script>
    // PDF File Upload Handling
    const pdfUploadArea = document.getElementById('pdfUploadArea');
    const pdfInput = document.getElementById('pdf_file');
    const browseBtn = document.getElementById('browseBtn');
    const filePreview = document.getElementById('filePreview');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const removeFile = document.getElementById('removeFile');
    const uploadProgress = document.getElementById('uploadProgress');
    const progressBar = uploadProgress.querySelector('.progress-bar');
    const submitBtn = document.getElementById('submitBtn');

    // Thumbnail Handling
    const thumbnailUploadArea = document.getElementById('thumbnailUploadArea');
    const thumbnailInput = document.getElementById('thumbnail');
    const browseThumbnail = document.getElementById('browseThumbnail');
    const thumbnailPreview = document.getElementById('thumbnailPreview');
    const thumbnailImage = document.getElementById('thumbnailImage');
    const removeThumbnail = document.getElementById('removeThumbnail');

    // PDF File handling
    browseBtn.addEventListener('click', () => pdfInput.click());

    pdfUploadArea.addEventListener('click', (e) => {
        if (e.target !== browseBtn && e.target !== removeFile) {
            pdfInput.click();
        }
    });

    pdfInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (file.type !== 'application/pdf') {
                alert('Please select a PDF file.');
                this.value = '';
                return;
            }

            if (file.size > 100 * 1024 * 1024) { // 100MB limit
                alert('File size exceeds 100MB limit.');
                this.value = '';
                return;
            }

            displayFileInfo(file);
        }
    });

    function displayFileInfo(file) {
        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);
        filePreview.style.display = 'block';
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    removeFile.addEventListener('click', () => {
        pdfInput.value = '';
        filePreview.style.display = 'none';
    });

    // Thumbnail handling
    browseThumbnail.addEventListener('click', () => thumbnailInput.click());

    thumbnailUploadArea.addEventListener('click', (e) => {
        if (e.target !== browseThumbnail && e.target !== removeThumbnail) {
            thumbnailInput.click();
        }
    });

    thumbnailInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (!file.type.match('image.*')) {
                alert('Please select an image file.');
                this.value = '';
                return;
            }

            if (file.size > 5 * 1024 * 1024) { // 5MB limit
                alert('Image size exceeds 5MB limitss.');
                this.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                thumbnailImage.src = e.target.result;
                thumbnailPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    removeThumbnail.addEventListener('click', () => {
        thumbnailInput.value = '';
        thumbnailPreview.style.display = 'none';
        thumbnailImage.src = '';
    });

    // Drag and drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        pdfUploadArea.addEventListener(eventName, preventDefaults, false);
        thumbnailUploadArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        pdfUploadArea.addEventListener(eventName, highlight, false);
        thumbnailUploadArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        pdfUploadArea.addEventListener(eventName, unhighlight, false);
        thumbnailUploadArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        e.currentTarget.classList.add('bg-primary', 'bg-opacity-10');
        e.currentTarget.style.borderColor = '#3498db';
    }

    function unhighlight(e) {
        e.currentTarget.classList.remove('bg-primary', 'bg-opacity-10');
        e.currentTarget.style.borderColor = '#dee2e6';
    }

    pdfUploadArea.addEventListener('drop', handleDrop);
    thumbnailUploadArea.addEventListener('drop', handleDrop);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        const isPdfArea = e.currentTarget.id === 'pdfUploadArea';

        if (files.length) {
            const file = files[0];

            if (isPdfArea) {
                if (file.type === 'application/pdf') {
                    pdfInput.files = files;
                    displayFileInfo(file);
                } else {
                    alert('Please drop a PDF file.');
                }
            } else {
                if (file.type.match('image.*')) {
                    thumbnailInput.files = files;
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        thumbnailImage.src = e.target.result;
                        thumbnailPreview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert('Please drop an image file.');
                }
            }
        }
    }

    // Form submission with progress (simulated)
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
        const pdfFile = pdfInput.files[0];

        if (!pdfFile) {
            e.preventDefault();
            alert('Please select a PDF file to upload.');
            return;
        }

        // Show progress bar
        uploadProgress.style.display = 'block';
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Uploading...';

        // Simulate progress (in real app, use XMLHttpRequest with progress events)
        let progress = 0;
        const interval = setInterval(() => {
            progress += 10;
            progressBar.style.width = progress + '%';

            if (progress >= 90) {
                clearInterval(interval);
            }
        }, 200);
    });

    // Auto-slug generation from title
    document.getElementById('title').addEventListener('input', function(e) {
        const title = e.target.value;
        // You can add slug generation logic here if needed
    });

    // Set today's date as default publication date
    window.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        const dateInput = document.getElementById('publication_date');
        if (!dateInput.value) {
            dateInput.value = today;
        }

        // Preview file if already selected (after validation error)
        const pdfFileInput = document.getElementById('pdf_file');
        if (pdfFileInput.files.length) {
            displayFileInfo(pdfFileInput.files[0]);
        }
    });
</script>
@endsection --}}
