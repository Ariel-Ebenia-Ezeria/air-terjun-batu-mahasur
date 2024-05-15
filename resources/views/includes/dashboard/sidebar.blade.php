<div class="transition sidebar overlay-scrollbars animate__animated animate__slideInLeft">
    <div class="sidebar-content">
        <div id="sidebar">
            <!-- Logo -->
            <div class="logo">
                <h2 class="mb-0"><img src="/assets/dashboard/images/logo.png"> Batu Mahasur</h2>
            </div>

            <ul class="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class='bx bxs-dashboard icon'></i> Dashboard
                    </a>
                </li>

                <!-- Divider-->
                {{-- <li class="divider" data-text="STARTER">Master Data</li> --}}

                {{-- <li>
                    <a href="#">
                        <i class='bx bx-columns icon'></i>
                        Layout
                        <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="side-dropdown">
                        <li><a href="layout-default.html">Default Layout</a></li>
                        <li><a href="layout-top-navigation.html">Top Navigation</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="{{ route('ulasan.index') }}" class="{{ request()->routeIs('ulasan*') ? 'active' : '' }}">
                        <i class='bx bxs-comment-dots icon'></i>
                        Ulasan
                    </a>
                </li>

                <li>
                    <a href="{{ route('galeri.index') }}" class="{{ request()->routeIs('galeri*') ? 'active' : '' }}">
                        <i class='bx bxs-image icon'></i>
                        Galeri
                    </a>
                </li>

                <li>
                    <a href="{{ route('pengaturan') }}" class="{{ request()->routeIs('pengaturan') ? 'active' : '' }}">
                        <i class='bx bxs-cog icon'></i>
                        Pengaturan
                    </a>
                </li>
            </ul>

            {{-- <div class="ads">
                <div class="wrapper">
                    <div class="help-icon"><i class="fa fa-circle-question fa-3x"></i></div>
                    <p>Need Help with <strong>Atrana</strong>?</p>
                    <a href="docs/" class="btn-upgrade">Documentation</a>
                </div>
            </div> --}}
        </div>
    </div>
</div>