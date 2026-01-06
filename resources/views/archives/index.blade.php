<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.new-meta')

    <!-- Additional CSS for Archives Page -->
    <style>
        /* Archives Page Specific Styles */
        .archives-page {
            padding-top: 140px;
            padding-bottom: 80px;
            background-color: #fff;
            min-height: 100vh;
        }

        .archives-container {
            max-width: 1000px; /* Changed from 1400px to 1000px */
            margin: 0 auto;
            padding: 0 20px;
        }

        .archives-header {
            text-align: center;
            margin-bottom: 60px;
            padding: 0 20px;
        }

        .archives-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .archives-subtitle {
            font-size: 1.2rem;
            color: #aaa;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Updated Archives Grid for 3 columns */
        .archives-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Fixed 3 columns */
            gap: 20px; /* Reduced from 30px to 20px */
            padding: 20px 0;
        }

        /* Archive Card Styles - Updated for image-only cards */
        .archive-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            height: 100%;
            /* aspect-ratio: 3/4;  */
            position: relative;
            cursor: pointer;
        }

        .archive-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.5);
            border-color: rgba(248, 195, 0, 0.3);
        }

        /* Updated Archive Image to fill entire card */
        .archive-image {
            height: 100%; /* Now takes 100% of the card height */
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .archive-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .archive-card:hover .archive-image img {
            transform: scale(1.05);
        }

        /* Updated Overlay for better visual effect */
        .archive-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.9) 100%);
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .archive-card:hover .archive-overlay {
            opacity: 0.85;
        }

        /* Optional: Add a subtle zoom effect on the overlay */
        .archive-overlay::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(248, 195, 0, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .archive-card:hover .archive-overlay::after {
            opacity: 1;
        }

        /* Empty State */
        .empty-archives {
            text-align: center;
            padding: 80px 20px;
            grid-column: 1 / -1;
        }

        .empty-icon {
            font-size: 4rem;
            color: #f8c300;
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.8rem;
            color: #fff;
            margin-bottom: 15px;
        }

        .empty-text {
            font-size: 1.1rem;
            color: #aaa;
            max-width: 500px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .empty-btn {
            display: inline-block;
            background-color: #f8c300;
            color: #000;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .empty-btn:hover {
            background-color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(248, 195, 0, 0.3);
        }

        /* Responsive Styles - Updated for 1000px container */
        @media (max-width: 1100px) {
            .archives-container {
                max-width: 900px;
            }

            .archives-grid {
                gap: 18px; /* Slightly reduced gap */
            }
        }

        @media (max-width: 1024px) {
            .archives-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 columns on tablets */
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .archives-page {
                padding-top: 120px;
                padding-bottom: 60px;
            }

            .archives-title {
                font-size: 2rem;
            }

            .archives-subtitle {
                font-size: 1.1rem;
            }

            .archives-grid {
                grid-template-columns: 1fr; /* 1 column on mobile */
                gap: 20px;
                max-width: 500px;
                margin: 0 auto;
            }

            .archive-card {
                aspect-ratio: 3/4; /* Maintain rectangular shape */
            }
        }

        @media (max-width: 576px) {
            .archives-page {
                padding-top: 100px;
                padding-bottom: 40px;
            }

            .archives-title {
                font-size: 1.8rem;
            }

            .archives-subtitle {
                font-size: 1rem;
            }

            .archives-grid {
                gap: 20px;
            }
        }

        /* Pagination Styles */
        .pagination-container {
            margin-top: 60px;
            text-align: center;
        }

        .pagination {
            display: inline-flex;
            list-style: none;
            gap: 8px;
        }

        .pagination li {
            display: inline-block;
        }

        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .pagination a:hover {
            background-color: #f8c300;
            color: #000;
            transform: translateY(-3px);
        }

        .pagination .active a {
            background-color: #f8c300;
            color: #000;
        }

        @media (max-width: 576px) {
            .pagination-container {
                margin-top: 40px;
            }

            .pagination a {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    @include('pages.new-header')

    <!-- Archives Page Content -->
    <main class="archives-page">
        <div class="archives-container">
            <!-- Page Header -->


            <!-- Archives Grid -->
            @if(count($artciles) > 0)
                <div class="archives-grid">
                    @foreach($artciles as $article)
                    <a
                        href="{{ Storage::url($article->pdf_path) }}"
                        target="_blank"
                        class="archive-card-link"
                    >
                                        <div class="archive-card">
                                            <div class="archive-image">
                                                <img src="{{ Storage::url($article->thumbnail_path) }}" alt="{{ $article->title ?? 'Newspaper Edition' }}">
                                                <div class="archive-overlay"></div>
                                            </div>
                                        </div>
                    </a>
                    @endforeach
                </div>

                <!-- Pagination (if you have pagination) -->
                @if(method_exists($artciles, 'links'))
                    <div class="pagination-container">
                        {{ $artciles->links() }}
                    </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="empty-archives">
                    <div class="empty-icon">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <h3 class="empty-title">No Archives Available</h3>
                    <p class="empty-text">
                        Currently, there are no archived editions available. Please check back later for new additions to our collection.
                    </p>
                    <a href="{{ route('welcome') }}" class="empty-btn">
                        <i class="fas fa-home"></i> Return Home
                    </a>
                </div>
            @endif
        </div>
    </main>

    @include('pages.script')
</body>
</html>
