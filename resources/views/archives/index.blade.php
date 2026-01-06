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
            background-color: #0a0a0a;
            min-height: 100vh;
        }

        .archives-container {
            max-width: 1400px;
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

        .archives-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }

        /* Archive Card Styles */
        .archive-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .archive-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border-color: rgba(248, 195, 0, 0.3);
        }

        .archive-image {
            height: 400px;
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

        .archive-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.8) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .archive-card:hover .archive-overlay {
            opacity: 1;
        }

        .archive-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .archive-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .archive-date {
            font-size: 0.9rem;
            color: #f8c300;
            margin-bottom: 15px;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .archive-date i {
            margin-right: 8px;
            font-size: 0.9rem;
        }

        .archive-description {
            font-size: 0.95rem;
            color: #aaa;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .archive-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #f8c300;
            color: #000;
            font-weight: 600;
            padding: 12px 25px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            transition: all 0.3s ease;
            text-align: center;
            width: 100%;
            font-size: 0.9rem;
        }

        .archive-btn:hover {
            background-color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(248, 195, 0, 0.3);
        }

        .archive-btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .archive-btn:hover i {
            transform: translateX(5px);
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

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .archives-grid {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 25px;
            }

            .archive-image {
                height: 350px;
            }
        }

        @media (max-width: 992px) {
            .archives-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
            }

            .archives-title {
                font-size: 2.4rem;
            }

            .archive-image {
                height: 320px;
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
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 20px;
            }

            .archive-image {
                height: 300px;
            }

            .archive-content {
                padding: 20px;
            }

            .archive-title {
                font-size: 1.2rem;
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
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .archive-image {
                height: 280px;
            }

            .archive-content {
                padding: 18px;
            }

            .archive-title {
                font-size: 1.1rem;
            }

            .archive-btn {
                padding: 10px 20px;
                font-size: 0.85rem;
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
            <div class="archives-header">
                <h1 class="archives-title">Archive Collection</h1>
                <p class="archives-subtitle">
                    Explore our collection of past editions documenting completed, verifiable development projects, reforms, and public welfare programmes.
                </p>
            </div>

            <!-- Archives Grid -->
            @if(count($artciles) > 0)
                <div class="archives-grid">
                    @foreach($artciles as $article)
                        <div class="archive-card">
                            <div class="archive-image">
                                <img src="{{ Storage::url($article->thumbnail_path) }}" alt="{{ $article->title ?? 'Newspaper Edition' }}">
                                <div class="archive-overlay"></div>
                            </div>
                            <div class="archive-content">
                                <h3 class="archive-title">
                                    {{ $article->title ?? 'Newspaper Edition' }}
                                </h3>

                                @if($article->created_at || $article->published_date)
                                    <div class="archive-date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $article->created_at ? $article->created_at->format('F d, Y') : ($article->published_date ?? '') }}
                                    </div>
                                @endif

                                @if($article->description || $article->excerpt)
                                    <p class="archive-description">
                                        {{ Str::limit($article->description ?? $article->excerpt ?? 'Read this edition to learn more about development projects and reforms.', 120) }}
                                    </p>
                                @endif

                                <a href="{{ Storage::url($article->pdf_path) }}" target="_blank" class="archive-btn">
                                    Read Edition <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
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
