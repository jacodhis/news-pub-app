<header id="SITE_HEADER" class="xU8fqS SITE_HEADER wixui-hea
der" tabindex="-1">
    <div class="_C0cVf"><div class="_4XcTfy" data-testid="screenWidthContainerBg"></div></div>
    <div class="U4Bvut">
        <div class="G5K6X8"><div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div></div>
        <div class="CJF7A2">
            <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content" class="">
                <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content">
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
                        ><nav class="R_TAzU" id="comp-irys4v5cnavContainer" aria-label="Site">
                            <ul
                                class="y7qwii"
                                id="comp-irys4v5citemsContainer"
                                style="text-align: right"
                                data-marginallchildren="true"
                            >
                                <li
                                    id="comp-irys4v5c0"
                                    data-direction="ltr"
                                    data-listposition="center"
                                    data-data-id="dataItem-l09mhc2c"
                                    data-state="menu selected  link"
                                    data-index="0"
                                    class="Tg1gOB wixui-dropdown-menu__item xTjc1A"
                                >
                                    <a
                                        data-testid="linkElement"
                                        href="{{ route('about')}}"
                                        target="_self"
                                        class="UiHgGh"
                                        aria-current="page"
                                        ><div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c0label">About</p></div>
                                        </div></a
                                    >
                                </li>
                                <li
                                    id="comp-irys4v5c1"
                                    data-direction="ltr"
                                    data-listposition="center"
                                    data-data-id="dataItem-kzwk5jpj"
                                    data-state="menu false  link"
                                    data-index="1"
                                    class="Tg1gOB wixui-dropdown-menu__item xTjc1A"
                                >
                                    <a
                                        data-testid="linkElement"
                                        href="{{ route('archives.index') }}"
                                        target="_self"
                                        class="UiHgGh"
                                        ><div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c1label">Archive</p></div>
                                        </div></a
                                    >
                                </li>
                                <li
                                    id="comp-irys4v5c2"
                                    data-direction="ltr"
                                    data-listposition="center"
                                    data-data-id="dataItem-jb3pleve"
                                    data-state="menu false  link"
                                    data-index="2"
                                    class="Tg1gOB wixui-dropdown-menu__item xTjc1A"
                                >
                                    <a
                                        data-testid="linkElement"
                                        href="{{ route('subscribe')}}"
                                        target="_self"
                                        class="UiHgGh"
                                    >
                                        <div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c2label">Subscribe</p></div>
                                        </div></a
                                    >
                                </li>
                                <li
                                    id="comp-irys4v5c3"
                                    data-direction="ltr"
                                    data-listposition="right"
                                    data-data-id="dataItem-l8ccmmvg"
                                    data-state="menu false  link"
                                    data-index="3"
                                    class="Tg1gOB wixui-dropdown-menu__item xTjc1A"
                                >
                                    <a
                                        data-testid="linkElement"
                                        href="{{route('donate')}}"
                                        target="_self"
                                        class="UiHgGh"
                                        ><div class="yRj2ms">
                                            <div class=""><p class="JS76Uv" id="comp-irys4v5c3label">Donate</p></div>
                                        </div></a
                                    >
                                </li>

                            </ul>
                            <div
                                class="h3jCPd"
                                id="comp-irys4v5cdropWrapper"
                                data-dropalign="right"
                                data-dropdown-shown="false"
                            >
                                <ul class="wkJ2fp wixui-dropdown-menu__submenu" id="comp-irys4v5cmoreContainer"></ul>
                            </div>
                            <div style="display: none" id="comp-irys4v5cnavContainer-hiddenA11ySubMenuIndication">
                                Use tab to navigate through the menu items.
                            </div>
                        </nav>
                    </wix-dropdown-menu>
                    <div id="comp-l09ic7mg" class="MazNVa comp-l09ic7mg wixui-image rYiAuL">
                        <a data-testid="linkElement" href="{{ route('welcome') }}" target="_self" class="j7pOnl">
                        <img
                                fetchpriority="high"
                                sizes="520px"
                                srcset="
                                    {{ asset('milestone-badge.jpeg') }} 1x,
                                    {{ asset('milestone-badge.jpeg') }} 2x
                                "
                                id="img_comp-l09ic7mg"
                                src="{{ asset('milestone-badge.jpeg') }}"
                                alt="72db5a46-d616-439f-8579-1efaa0b6bb02_5807x1441.webp"
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

a
