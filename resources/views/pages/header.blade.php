<style>
    /* Reset styles that might be interfering */
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }

    /* Ensure header container doesn't hide content */
    .xU8fqS.SITE_HEADER {
        overflow: visible !important;
    }

    /* Mobile hamburger menu */
    #mobileMenuToggle {
        display: none; /* Hidden by default */
        background: none;
        border: none;
        cursor: pointer;
        padding: 12px;
        margin: 0;
        position: absolute;
        right: 20px; /* More space from right edge */
        top: 20px; /* More space from top */
        z-index: 9999;
        flex-direction: column;
        justify-content: space-between;
        width: 44px;
        height: 44px;
        border-radius: 4px;
        transition: background-color 0.2s ease;
    }

    #mobileMenuToggle:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    #mobileMenuToggle span {
        width: 24px;
        height: 3px;
        background: #000;
        display: block;
        border-radius: 2px;
        transition: all 0.3s ease;
        margin: 3px 0;
    }

    #mobileMenuToggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    #mobileMenuToggle.active span:nth-child(2) {
        opacity: 0;
    }

    #mobileMenuToggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Mobile menu overlay */
    #mobileMenuOverlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9998;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #mobileMenuOverlay.active {
        display: block;
        opacity: 1;
    }

    /* Mobile menu */
    #mobileMenu {
        position: fixed;
        top: 0;
        right: -320px;
        width: 280px;
        height: 100vh;
        background: white;
        z-index: 9999;
        transition: right 0.3s ease;
        padding: 80px 0 20px;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
    }

    #mobileMenu.active {
        right: 0;
    }

    #mobileMenu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #mobileMenu li {
        margin: 0;
        border-bottom: 1px solid #f0f0f0;
    }

    #mobileMenu li:last-child {
        border-bottom: none;
    }

    #mobileMenu a {
        display: block;
        padding: 16px 24px;
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: 500;
        transition: background-color 0.2s ease;
    }

    #mobileMenu a:hover {
        background: #f8f8f8;
    }

    /* Mobile menu close button */
    .mobile-menu-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #333;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background-color 0.2s ease;
    }

    .mobile-menu-close:hover {
        background: #f5f5f5;
    }

    /* Mobile menu header */
    .mobile-menu-header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding: 20px 24px;
        border-bottom: 1px solid #eee;
        background: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .mobile-menu-header h3 {
        margin: 0;
        font-size: 18px;
        color: #333;
        font-weight: 600;
    }

    /* Mobile styles */
    @media screen and (max-width: 768px) {
        /* Show hamburger */
        #mobileMenuToggle {
            display: flex !important;
        }

        /* Hide desktop menu on mobile */
        #comp-irys4v5c {
            display: none !important;
        }

        /* Hide social icons on mobile */
        #comp-l0b7kk91 {
            display: none !important;
        }

        /* Adjust logo container for mobile */
        #comp-l09ic7mg {
            position: relative !important;
            margin-left: 20px !important; /* Space from left edge */
            margin-top: 20px !important; /* Space from top */
            max-width: 160px !important;
            z-index: 1;
        }

        /* Adjust logo image for mobile */
        #comp-l09ic7mg img {
            max-width: 100% !important;
            height: auto !important;
            max-height: 40px !important;
            object-fit: contain !important;
            display: block !important;
        }

        /* Adjust header grid container for proper spacing */
        [data-mesh-id="SITE_HEADERinlineContent-gridContainer"] {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: space-between !important;
            min-height: 80px !important; /* Give header some height */
            padding: 0 !important;
        }

        /* Ensure header container has proper spacing */
        .CJF7A2 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        /* Prevent body scroll when menu is open */
        body.menu-open {
            overflow: hidden !important;
        }

        /* Add padding to body content on mobile to avoid overlap */
        body::before {
            content: '';
            display: block;

        }
    }

    /* Desktop styles */
    @media screen and (min-width: 769px) {
        #mobileMenuToggle {
            display: none !important;
        }

        #mobileMenu {
            display: none !important;
        }

        #mobileMenuOverlay {
            display: none !important;
        }

        /* Reset logo positioning on desktop */
        #comp-l09ic7mg {
            position: static !important;
            margin: 0 !important;
            max-width: none !important;
        }
    }
    #comp-l09ic7mg {
        height: 55px !important;
    }
</style>

<header id="SITE_HEADER" class="xU8fqS SITE_HEADER wixui-header" tabindex="-1">
    <div class="_C0cVf"><div class="_4XcTfy" data-testid="screenWidthContainerBg"></div></div>
    <div class="U4Bvut">
        <div class="G5K6X8"><div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div></div>
        <div class="CJF7A2">
            <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content" class="">
                <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content">
                    <!-- Social icons -->
                    <div id="comp-l0b7kk91" class="comp-l0b7kk91 WzbAF8">
                        @php
                            $logos = [
                                'whatsapp' => 'https://static.wixstatic.com/media/11062b_f2ffb02bc607453abfd2d2389e6e1fa4~mv2.png',
                                'telegram' => 'https://static.wixstatic.com/media/11062b_d48b7cc7f4244e918f2430aedd61a6c1~mv2.png',
                                'twitter'  => 'https://static.wixstatic.com/media/11062b_923d540bee594407b17f142805a44a15~mv2.png',
                                'facebook' => 'https://static.wixstatic.com/media/11062b_1f7ed8bc7b004201970df69f9eeda689~mv2.png',
                                'instagram'=> 'https://static.wixstatic.com/media/11062b_084cbbff6ae446c1b03dc3637193e77a~mv2.png',
                            ];
                            $socialLinks = App\Models\SocialLink::get();
                        @endphp
                     <ul class="mpGTIt" aria-label="Social Bar">
                        @foreach ($socialLinks as $link)
                            <li class="O6KwRn">
                                <a
                                    data-testid="linkElement"
                                    href="{{ $link->url }}"
                                    target="_blank"
                                    rel="noreferrer noopener"
                                    class="oRtuWN"
                                    aria-label="{{ ucfirst($link->platform) }}"
                                >
                                    <img
                                        src="{{ $logos[$link->platform] ?? '' }}"
                                        alt="{{ ucfirst($link->platform) }}"
                                        style="object-fit: cover; width:28px; height:28px;"
                                        class="YaS0jR Tj01hh"
                                    />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    </div>

                    <!-- Desktop menu -->
                    <wix-dropdown-menu
                        id="comp-irys4v5c"
                        class="XwCBRN NHM1d1 comp-irys4v5c wixui-dropdown-menu hidden-during-prewarmup"
                        tabIndex="-1"
                        dir="ltr"
                        data-stretch-buttons-to-menu-width="false"
                        data-same-width-buttons="false"
                        data-num-items="4"
                        data-menuborder-y="0"
                        data-menubtn-border="0"
                        data-ribbon-els="0"
                        data-label-pad="0"
                        data-ribbon-extra="0"
                        data-dropalign="right"
                        >
                        <nav class="R_TAzU" id="comp-irys4v5cnavContainer" aria-label="Site">
                            <ul class="y7qwii" id="comp-irys4v5citemsContainer" style="text-align: right" data-marginallchildren="true">
                                <li id="comp-irys4v5c0" data-direction="ltr" data-listposition="center" data-data-id="dataItem-l09mhc2c" data-state="menu selected  link" data-index="0" class="Tg1gOB wixui-dropdown-menu__item xTjc1A">
                                    <a data-testid="linkElement" href="{{ route('about')}}" target="_self" class="UiHgGh" aria-current="page">
                                        <div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c0label">About</p></div>
                                        </div>
                                    </a>
                                </li>
                                <li id="comp-irys4v5c1" data-direction="ltr" data-listposition="center" data-data-id="dataItem-kzwk5jpj" data-state="menu false  link" data-index="1" class="Tg1gOB wixui-dropdown-menu__item xTjc1A">
                                    <a data-testid="linkElement" href="{{ route('archives.index') }}" target="_self" class="UiHgGh">
                                        <div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c1label">Archive</p></div>
                                        </div>
                                    </a>
                                </li>
                                <li id="comp-irys4v5c2" data-direction="ltr" data-listposition="center" data-data-id="dataItem-jb3pleve" data-state="menu false  link" data-index="2" class="Tg1gOB wixui-dropdown-menu__item xTjc1A">
                                    <a data-testid="linkElement" href="{{ route('subscribe')}}" target="_self" class="UiHgGh">
                                        <div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c2label">Subscribe</p></div>
                                        </div>
                                    </a>
                                </li>
                                <li id="comp-irys4v5c3" data-direction="ltr" data-listposition="right" data-data-id="dataItem-l8ccmmvg" data-state="menu false  link" data-index="3" class="Tg1gOB wixui-dropdown-menu__item xTjc1A">
                                    <a data-testid="linkElement" href="{{route('donate')}}" target="_self" class="UiHgGh">
                                        <div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c3label">Donate</p></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </wix-dropdown-menu>

                    <!-- Hamburger button -->
                    <button id="mobileMenuToggle" aria-label="Toggle menu" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- Logo -->
                    <div id="comp-l09ic7mg" class="MazNVa comp-l09ic7mg wixui-image rYiAuL">
                        <a data-testid="linkElement" href="{{ route('welcome') }}" target="_self" class="j7pOnl">
                            <img
                                fetchpriority="high"
                                sizes="520px"
                                srcset="{{ asset('milestone-badge.jpeg') }} 1x, {{ asset('milestone-badge.jpeg') }} 2x"
                                id="img_comp-l09ic7mg"
                                src="{{ asset('milestone-badge.jpeg') }}"
                                alt="Logo"
                                style="object-fit: cover"
                                class="BI8PVQ Tj01hh"
                                width="520"
                                height="81"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobileMenuOverlay"></div>

<!-- Mobile Menu -->
<nav id="mobileMenu">
    <div class="mobile-menu-header">
        <h3>Menu</h3>
        <button class="mobile-menu-close" aria-label="Close menu">&times;</button>
    </div>
    <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('archives.index') }}">Archive</a></li>
        <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
        <li><a href="{{ route('donate') }}">Donate</a></li>
    </ul>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('mobileMenuOverlay');
    const closeButton = document.querySelector('.mobile-menu-close');
    const logo = document.getElementById('comp-l09ic7mg');

    // Debug logging
    console.log('Menu toggle:', menuToggle);
    console.log('Mobile menu:', mobileMenu);
    console.log('Logo:', logo);

    function openMenu() {
        console.log('Opening menu');
        mobileMenu.classList.add('active');
        overlay.classList.add('active');
        menuToggle.classList.add('active');
        menuToggle.setAttribute('aria-expanded', 'true');
        document.body.classList.add('menu-open');
    }

    function closeMenu() {
        console.log('Closing menu');
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        menuToggle.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }

    // Toggle menu when hamburger is clicked
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        console.log('Hamburger clicked');
        if (mobileMenu.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Close menu when clicking overlay
    overlay.addEventListener('click', closeMenu);

    // Close menu when clicking close button
    if (closeButton) {
        closeButton.addEventListener('click', closeMenu);
    }

    // Close menu when clicking menu links
    const menuLinks = mobileMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            setTimeout(closeMenu, 100);
        });
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMenu();
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu.classList.contains('active') &&
            !mobileMenu.contains(e.target) &&
            !menuToggle.contains(e.target)) {
            closeMenu();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            closeMenu();
        }
    });

    // Add some CSS to ensure proper spacing on mobile
    if (window.innerWidth <= 768) {
        // Add padding to prevent content from being hidden under header
        const headerHeight = document.querySelector('#SITE_HEADER')?.offsetHeight || 80;
        const paddingElement = document.createElement('div');
        paddingElement.style.height = headerHeight + 'px';
        paddingElement.style.width = '100%';
        paddingElement.style.background = 'transparent';
        paddingElement.style.position = 'relative';
        paddingElement.style.zIndex = '1';

        // Try to insert after header
        const header = document.querySelector('#SITE_HEADER');
        if (header && header.parentNode) {
            header.parentNode.insertBefore(paddingElement, header.nextSibling);
        }
    }
});
</script>
