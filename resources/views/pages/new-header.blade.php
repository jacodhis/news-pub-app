<header class="header">
        <!-- Social Links Bar (Top) -->
        <div class="header-top">
            <div class="container">
                <div class="social-bar">
                    <div class="social-links">
                        @php
                            $logos = [
                                'whatsapp' => 'fab fa-whatsapp',
                                'telegram' => 'fab fa-telegram',
                                'twitter'  => 'fab fa-twitter',
                                'facebook' => 'fab fa-facebook-f',
                                'instagram'=> 'fab fa-instagram',
                            ];
                            $socialLinks = App\Models\SocialLink::get();
                        @endphp

                         @foreach ($socialLinks as $link)
                          <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                                <i class="{{ $logos[$link->platform] ?? '' }}"></i>
                            </a>
                         @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="header-main" style="background: white;">
            <div class="container header-container">
                <!-- Logo -->
                <a href="{{ route('welcome') }}" class="logo-link">
                    <img src="{{ asset('milestone-badge.jpeg') }}" alt="Taifa Forward Logo" class="logo">
                </a>

                <!-- Desktop Navigation -->
                <nav class="nav-desktop">
                    <!-- Navigation Menu (Right side) -->
                    <ul class="nav-menu" style="color: black;">
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('archives.index') }}">Archive</a></li>
                        <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
                        <li><a href="{{ route('donate') }}">Donate</a></li>
                    </ul>
                </nav>

                <!-- Mobile Navigation Toggle -->
                <button class="mobile-nav-toggle" id="mobileNavToggle">
                    <i class="fas fa-bars" id="mobileNavIcon" style="color: black;"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <nav class="nav-mobile" id="mobileNav">
            <div class="social-links">
                <!-- Same social links as desktop -->
                <a href="https://wa.me/" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://t.me/" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
                    <i class="fab fa-telegram"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <ul class="nav-menu">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('archives.index') }}">Archive</a></li>
                <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
                <li><a href="{{ route('donate') }}">Donate</a></li>
            </ul>
        </nav>
    </header>

