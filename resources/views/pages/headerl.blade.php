<style>
/* ================= MOBILE HEADER OVERRIDES ONLY ================= */
@media (max-width: 768px) {

    /* Make header row flex */
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"] {
        display: flex !important;
        align-items: baseline; /* baseline alignment */
        justify-content: space-between;
        gap: 12px;
    }

    /* Logo on the left */
    #comp-l09ic7mg {
        order: 1;
    }

    /* Hide desktop menu & socials */
    #comp-irys4v5c,
    #comp-l0b7kk91 {
        display: none !important;
    }

    /* Hamburger button */
    .mobile-hamburger {
        order: 3;
        margin-left: auto;
        display: flex;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 4px;
    }

    .mobile-hamburger span {
        width: 26px;
        height: 3px;
        background: #000;
        display: block;
    }
}

/* Hide hamburger on large screens */
@media (min-width: 769px) {
    .mobile-hamburger {
        display: none !important;
    }
}

/* Mobile menu panel */
#mobileMenu {
    display: none;
    background: #fff;
    border-top: 1px solid #eee;
}

#mobileMenu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#mobileMenu li {
    border-bottom: 1px solid #eee;
}

#mobileMenu a {
    display: block;
    padding: 14px 20px;
    text-decoration: none;
    color: #000;
}
</style>

<header id="SITE_HEADER" class="xU8fqS SITE_HEADER wixui-header" tabindex="-1">
    <div class="_C0cVf">
        <div class="_4XcTfy" data-testid="screenWidthContainerBg"></div>
    </div>

    <div class="U4Bvut">
        <div class="G5K6X8">
            <div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div>
        </div>

        <div class="CJF7A2">
            <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content">
                <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content">

                    <!-- SOCIAL ICONS (DESKTOP ONLY) -->
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
                                    <a href="{{ $link->url }}" target="_blank" rel="noreferrer noopener">
                                        <img src="{{ $logos[$link->platform] ?? '' }}"
                                             alt="{{ ucfirst($link->platform) }}"
                                             style="width:28px;height:28px;">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- DESKTOP MENU -->
                    <wix-dropdown-menu id="comp-irys4v5c" class="XwCBRN NHM1d1 wixui-dropdown-menu">
                        <nav aria-label="Site">
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('archives.index') }}">Archive</a></li>
                                <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
                                <li><a href="{{ route('donate') }}">Donate</a></li>
                            </ul>
                        </nav>
                    </wix-dropdown-menu>

                    <!-- MOBILE HAMBURGER -->
                    <button id="mobileMenuToggle" class="mobile-hamburger" aria-label="Open menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- LOGO -->
                    <div id="comp-l09ic7mg" class="MazNVa comp-l09ic7mg wixui-image rYiAuL">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('milestone-badge.jpeg') }}"
                                 alt="Site Logo"
                                 width="220">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- MOBILE MENU -->
<nav id="mobileMenu">
    <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('archives.index') }}">Archive</a></li>
        <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
        <li><a href="{{ route('donate') }}">Donate</a></li>
    </ul>
</nav>

<script>
document.getElementById('mobileMenuToggle')?.addEventListener('click', function () {
    const menu = document.getElementById('mobileMenu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});
</script>
