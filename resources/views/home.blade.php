@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Downloads Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid px-4">

    {{-- Header with Filter --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
        <div class="mb-3 mb-md-0">
            <h1 class="h2 fw-bold text-primary">Downloads Analytics</h1>
            <p class="text-muted mb-0">Track and analyze download statistics</p>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body py-2">
                <form method="GET" class="d-flex align-items-center gap-2">
                    <label for="time" class="form-label mb-0 fw-medium">Time Range:</label>
                    <select name="time" id="time" class="form-select form-select-sm w-auto" onchange="this.form.submit()">
                        <option value="all" {{ $timeFilter === 'all' ? 'selected' : '' }}>All Time</option>
                        <option value="daily" {{ $timeFilter === 'daily' ? 'selected' : '' }}>Daily</option>
                        <option value="weekly" {{ $timeFilter === 'weekly' ? 'selected' : '' }}>Weekly</option>
                        <option value="monthly" {{ $timeFilter === 'monthly' ? 'selected' : '' }}>Monthly</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

    {{-- Summary Card --}}
    <div class="row mb-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-lg bg-gradient-primary">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <h3 class="card-title h4 mb-2">Total Downloads</h3>
                            <p class="card-text opacity-75 mb-3">Across all archives and time periods</p>
                            <div class="d-flex align-items-center gap-3">
                                <span class="display-4 fw-bold">{{ $totalDownloads }}</span>
                                <span class="badge bg-white text-primary fs-6 px-3 py-2">
                                    <i class="fas fa-download me-1"></i> Downloads
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center text-md-end">
                            <div class="icon-shape bg-white bg-opacity-25 rounded-circle p-4 d-inline-block">
                                <i class="fas fa-chart-line fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mt-3 mt-lg-0">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <h4 class="card-title h5 text-muted mb-3">
                        <i class="fas fa-archive me-2"></i>Active Archives
                    </h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="display-5 fw-bold text-dark">{{ count($archives) }}</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary fs-6 px-3 py-2">
                            Tracking
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Archive Stats Grid --}}
    <div class="mb-4">
        <h3 class="h4 mb-3 d-flex align-items-center">
            <i class="fas fa-chart-bar text-primary me-2"></i>Archive Performance
        </h3>

        <div class="row g-4">
            @foreach($archives as $index => $archive)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100 hover-shadow">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="flex-grow-1 me-3">
                                <h5 class="card-title fw-bold mb-1 text-truncate" title="{{ $archive->title }}">
                                    {{ $archive->title }}
                                </h5>
                                <p class="text-muted small mb-0">Archive ID: #{{ $archive->id }}</p>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary">
                                #{{ $index + 1 }}
                            </span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <span class="text-muted small">Total Downloads</span>
                                <div class="d-flex align-items-baseline">
                                    <span class="h2 fw-bold text-dark me-2">
                                        {{ $archive->downloads->sum('number_of_counts') }}
                                    </span>
                                    <span class="text-success small">
                                        <i class="fas fa-arrow-up me-1"></i>Active
                                    </span>
                                </div>
                            </div>
                            <div class="icon-shape bg-primary bg-opacity-10 rounded-circle p-3">
                                <i class="fas fa-file-archive text-primary fa-lg"></i>
                            </div>
                        </div>

                        <div class="progress mt-3" style="height: 6px;">
                            @php
                                $totalAll = $totalDownloads > 0 ? $totalDownloads : 1;
                                $percentage = ($archive->downloads->sum('number_of_counts') / $totalAll) * 100;
                            @endphp
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: {{ min($percentage, 100) }}%"
                                 aria-valuenow="{{ $percentage }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100">
                            </div>
                        </div>
                        <div class="text-end mt-2">
                            <small class="text-muted">{{ number_format($percentage, 1) }}% of total downloads</small>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent border-top-0 py-3">
                        <a href="#" class="btn btn-outline-primary btn-sm w-100">
                            <i class="fas fa-eye me-1"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Time Range Info --}}
    @if($timeFilter !== 'all')
    <div class="alert alert-info border-0 shadow-sm d-flex align-items-center" role="alert">
        <i class="fas fa-info-circle fa-lg me-3"></i>
        <div>
            <strong>Showing {{ ucfirst($timeFilter) }} Data</strong>
            <p class="mb-0">Viewing download statistics for the current {{ $timeFilter }} period. Change time range using the filter above.</p>
        </div>
    </div>
    @endif

</div>

@push('styles')
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.15)!important;
    }

    .icon-shape {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .progress {
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-bar {
        border-radius: 10px;
    }
</style>
@endpush

@push('scripts')
<script>
    // Add animation to counter numbers
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.display-4, .h2.fw-bold');

        counters.forEach(counter => {
            const target = +counter.innerText.replace(/,/g, '');
            const increment = target / 100;
            let current = 0;

            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.innerText = Math.ceil(current).toLocaleString();
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            // Start animation when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCounter();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(counter);
        });
    });
</script>
@endpush

@endsection
