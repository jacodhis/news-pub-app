<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'News Archive Admin')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --sidebar-width: 250px;
            --mobile-breakpoint: 768px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background-color: #f5f7fa;
            overflow-x: hidden;
        }

        /* Sidebar - Mobile Optimized */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-color) 0%, #1a2530 100%);
            color: white;
            position: fixed;
            height: 100vh;
            padding-top: 20px;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 3px 0 10px rgba(0,0,0,0.1);
            z-index: 1050;
            overflow-y: auto;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        .sidebar-header {
            padding: 15px 20px 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 15px;
        }

        .sidebar-header h3 {
            color: white;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .sidebar-header .logo-icon {
            color: var(--secondary-color);
            font-size: 24px;
            margin-right: 10px;
        }

        .sidebar-header small {
            font-size: 0.85rem;
        }

        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 15px;
            margin: 3px 10px;
            border-radius: 8px;
            transition: all 0.3s;
            font-size: 0.95rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nav-link:hover, .nav-link.active {
            background-color: rgba(52, 152, 219, 0.2);
            color: white;
            transform: translateX(5px);
        }

        .nav-link i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
            flex-shrink: 0;
        }

        /* Mobile Sidebar Overlay */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Main Content - Responsive */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 15px;
            min-height: 100vh;
            transition: margin-left 0.3s;
        }

        /* Header - Mobile Optimized */
        .admin-header {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .header-title {
            flex: 1;
            min-width: 250px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .header-actions .btn {
            margin: 0;
        }

        .breadcrumb {
            margin-bottom: 0;
            flex-wrap: nowrap;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 2px;
        }

        .breadcrumb::-webkit-scrollbar {
            height: 3px;
        }

        /* Mobile Sidebar Toggle Button */
        #sidebarToggle {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1060;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--secondary-color);
            color: white;
            border: none;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            transition: all 0.3s;
        }

        #sidebarToggle:hover {
            transform: scale(1.1);
            background: var(--primary-color);
        }

        /* Stats Cards - Mobile Grid */
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            border-left: 4px solid var(--secondary-color);
            margin-bottom: 15px;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-card i {
            font-size: 28px;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        .stat-card .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1.2;
        }

        .stat-card .stat-label {
            color: #6c757d;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 5px;
        }

        /* Tables - Mobile Scroll */
        .table-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            margin-top: 20px;
            overflow: hidden;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive table {
            min-width: 600px;
        }

        .table-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--light-bg);
            padding-bottom: 15px;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        /* PDF Thumbnail */
        .pdf-thumbnail {
            width: 50px;
            height: 65px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        /* Form Styles - Mobile Optimized */
        .form-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.08);
        }

        .file-upload-area {
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            padding: 30px 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 15px;
        }

        .file-upload-area:hover {
            border-color: var(--secondary-color);
            background-color: rgba(52, 152, 219, 0.05);
        }

        .file-upload-area i {
            font-size: 36px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        /* Action Buttons - Touch Friendly */
        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            min-height: 44px; /* Minimum touch target size */
            min-width: 44px;
        }

        .btn-sm {
            min-height: 36px;
            min-width: 36px;
        }

        /* Mobile Optimized Grid */
        .row {
            margin-right: -8px;
            margin-left: -8px;
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            padding-right: 8px;
            padding-left: 8px;
        }

        /* Mobile Typography */
        h1 { font-size: 1.8rem; }
        h2 { font-size: 1.6rem; }
        h3 { font-size: 1.4rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1.1rem; }
        h6 { font-size: 1rem; }

        /* Mobile Specific Styles */
        @media (max-width: 768px) {
            :root {
                --sidebar-width: 280px;
            }

            .sidebar {
                transform: translateX(-100%);
                padding-top: 60px;
                width: 280px;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar-overlay.active {
                display: block;
            }

            .main-content {
                margin-left: 0 !important;
                padding: 10px;
            }

            .admin-header {
                padding: 12px;
                margin-bottom: 15px;
                position: sticky;
                top: 0;
                z-index: 1030;
                border-radius: 0;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            .header-title {
                min-width: 100%;
                order: 1;
            }

            .header-actions {
                order: 2;
                width: 100%;
                justify-content: space-between;
            }

            .header-actions .btn {
                flex: 1;
                text-align: center;
            }

            #sidebarToggle {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .stat-card {
                padding: 15px;
                margin-bottom: 10px;
            }

            .stat-card .stat-number {
                font-size: 20px;
            }

            .table-container {
                padding: 15px;
                margin-top: 15px;
            }

            .form-container {
                padding: 15px;
            }

            .file-upload-area {
                padding: 20px 10px;
            }

            .file-upload-area i {
                font-size: 28px;
            }

            .breadcrumb {
                font-size: 0.85rem;
            }

            /* Stack columns on mobile */
            .row > .col-md-8,
            .row > .col-md-4,
            .row > .col-lg-8,
            .row > .col-lg-4 {
                width: 100%;
                max-width: 100%;
                flex: 0 0 100%;
            }

            /* Better touch targets */
            .btn {
                padding: 12px 16px;
                font-size: 1rem;
            }

            /* Hide less important elements on mobile */
            .d-none-mobile {
                display: none !important;
            }

            /* Show mobile-only elements */
            .d-mobile {
                display: block !important;
            }

            /* Adjust table cells for mobile */
            .table td, .table th {
                padding: 8px 5px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .stat-card .stat-number {
                font-size: 18px;
            }

            .table-container {
                padding: 10px;
            }

            .form-container {
                padding: 10px;
            }

            .btn-group {
                flex-wrap: wrap;
                gap: 5px;
            }

            .btn-group .btn {
                margin: 2px;
            }

            .pdf-thumbnail {
                width: 40px;
                height: 55px;
                font-size: 18px;
            }

            h1 { font-size: 1.5rem; }
            h2 { font-size: 1.3rem; }
            h3 { font-size: 1.2rem; }
            h4 { font-size: 1.1rem; }
            h5 { font-size: 1rem; }
        }

        @media (min-width: 769px) {
            .d-mobile {
                display: none !important;
            }
        }

        /* Print Styles */
        @media print {
            .sidebar,
            .admin-header,
            #sidebarToggle,
            .btn {
                display: none !important;
            }

            .main-content {
                margin-left: 0 !important;
                padding: 0;
            }

            .table-container {
                box-shadow: none;
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="d-flex align-items-center">
                <i class="bi bi-newspaper logo-icon"></i>
                <div>
                    <h3>NewsArchive</h3>
                    <small class="text-muted">Admin Panel</small>
                </div>
            </div>
            <div class="d-mobile mt-3">
                <button class="btn btn-sm btn-outline-light w-100" id="closeSidebar">
                    <i class="bi bi-x-lg"></i> Close Menu
                </button>
            </div>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <i class="bi bi-speedometer2"></i> <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-archives.*') ? 'active' : '' }}" href="{{ route('admin-archives.index') }}">
                    <i class="bi bi-file-earmark-pdf"></i> <span class="nav-text">PDF Archives</span>
                </a>
            </li>
            <li class="nav-item">
                 <a class="nav-link {{ request()->routeIs('settings.*') ? 'active' : '' }}" href="{{ route('settings.index') }}">
                    <i class="bi bi-file-earmark-pdf"></i> <span class="nav-text">Settings</span>
                </a>

            </li>


                    </a>
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                    <i class="bi bi-tags"></i> <span class="nav-text">Categories</span>
                </a>
            </li> --}}
            {{-- @role('Administrator') --}}


            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <i class="bi bi-tags"></i> <span class="nav-text">Users</span>
                </a>
            </li>
            {{-- @endrole --}}
            <li class="nav-item mt-5">
                <a class="nav-link text-warning" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i> <span class="nav-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <header class="admin-header">
            <div class="header-title">
                <h4 class="mb-1">@yield('page-title')</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        @yield('breadcrumb')
                    </ol>
                </nav>
            </div>
            <div class="header-actions">
                <button class="btn btn-outline-secondary d-mobile" id="mobileSidebarToggle">
                    <i class="bi bi-list"></i> Menu
                </button>
                <div class="d-flex align-items-center">
                    <span class="me-3 text-muted d-none d-md-inline">{{ Auth::user()->name ?? 'Admin' }}</span>
                    <button class="btn btn-sm btn-outline-secondary" id="desktopSidebarToggle">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main>
            <div class="container-fluid">
                {{-- @if(session('success'))
                    <div class="alert alert-success alert-custom alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}

                @if(session('error'))
                    <div class="alert alert-danger alert-custom alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

        <!-- Mobile Footer Menu -->
        <nav class="navbar fixed-bottom navbar-light bg-white d-mobile d-md-none border-top" style="display: none;">
            <div class="container-fluid">
                <div class="d-flex justify-content-around w-100">
                    <a href="{{ route('home') }}" class="nav-link text-center {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2 d-block"></i>
                        <small>Dashboard</small>
                    </a>
                    <a href="{{ route('admin-archives.index') }}" class="nav-link text-center {{ request()->routeIs('admin-archives.*') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-pdf d-block"></i>
                        <small>PDF Archives</small>
                    </a>
                    {{-- <a href="{{ route('categories.index') }}" class="nav-link text-center {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        <i class="bi bi-tags d-block"></i>
                        <small>Categories</small>
                    </a> --}}
                     <a href="{{ route('settings.index') }}" class="nav-link text-center {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                        <i class="bi bi-tags d-block"></i>
                        <small>Settings</small>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-center">
                        <i class="bi bi-box-arrow-right d-block"></i>
                        <small>Logout</small>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Floating Action Button for Mobile -->
    <button class="btn btn-primary" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Enhanced sidebar toggle functionality
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const mainContent = document.getElementById('mainContent');
        const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
        const desktopSidebarToggle = document.getElementById('desktopSidebarToggle');
        const closeSidebar = document.getElementById('closeSidebar');
        const floatingToggle = document.getElementById('sidebarToggle');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
            document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : 'auto';
        }

        function closeSidebarFunc() {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Event listeners
        if (mobileSidebarToggle) {
            mobileSidebarToggle.addEventListener('click', toggleSidebar);
        }

        if (desktopSidebarToggle) {
            desktopSidebarToggle.addEventListener('click', toggleSidebar);
        }

        if (floatingToggle) {
            floatingToggle.addEventListener('click', toggleSidebar);
        }

        if (closeSidebar) {
            closeSidebar.addEventListener('click', closeSidebarFunc);
        }

        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', closeSidebarFunc);
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !mobileSidebarToggle.contains(e.target) &&
                    !floatingToggle.contains(e.target) && sidebar.classList.contains('active')) {
                    closeSidebarFunc();
                }
            }
        });

        // File upload preview
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('pdf_file');
            if(fileInput) {
                fileInput.addEventListener('change', function(e) {
                    const fileName = e.target.files[0]?.name;
                    if(fileName) {
                        const fileNameElement = document.getElementById('file-name');
                        if(fileNameElement) {
                            fileNameElement.textContent = fileName.length > 30 ?
                                fileName.substring(0, 27) + '...' : fileName;
                        }
                    }
                });
            }

            // Confirm delete with better mobile dialog
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if(!confirm('Are you sure you want to delete this item? This action cannot be undone.')) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                });
            });

            // Add touch support for dropdowns on mobile
            if ('ontouchstart' in window) {
                const dropdowns = document.querySelectorAll('.dropdown-toggle');
                dropdowns.forEach(dropdown => {
                    dropdown.addEventListener('touchstart', function(e) {
                        e.preventDefault();
                        const dropdownMenu = this.nextElementSibling;
                        dropdownMenu.classList.toggle('show');
                    });
                });
            }

            // Auto-hide mobile footer menu when keyboard appears
            if (window.visualViewport) {
                window.visualViewport.addEventListener('resize', () => {
                    const footerMenu = document.querySelector('.fixed-bottom');
                    if (footerMenu) {
                        if (window.visualViewport.height < 500) {
                            footerMenu.style.display = 'none';
                        } else {
                            footerMenu.style.display = 'flex';
                        }
                    }
                });
            }
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 768) {
                    closeSidebarFunc();
                }
            }, 250);
        });

        // Prevent zoom on double-tap (iOS)
        let lastTouchEnd = 0;
        document.addEventListener('touchend', (event) => {
            const now = Date.now();
            if (now - lastTouchEnd <= 300) {
                event.preventDefault();
            }
            lastTouchEnd = now;
        }, false);

        // Better scroll handling for mobile
        document.addEventListener('touchmove', (e) => {
            if (sidebar.classList.contains('active')) {
                e.preventDefault();
            }
        }, { passive: false });
    </script>

    @yield('scripts')


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
                alert('Image size exceeds 5MB limit.');
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

</body>
</html>
