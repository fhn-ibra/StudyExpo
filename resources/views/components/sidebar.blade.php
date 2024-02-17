<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="sidenav-menu-heading">Custom</div>
                <!-- Sidenav Accordion (Pages)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Kelas
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                        <a class="nav-link {{ $title == 'Sesi 1' ? 'active' : '' }}" href="{{ route('sesi1') }}">Sesi 1</a>
                        <a class="nav-link  {{ $title == 'Sesi 2' ? 'active' : '' }}" href="{{ route('sesi2') }}">Sesi 2</a>
                    </nav>
                </div>
                <!-- Sidenav Link (Tables)-->
                <a class="nav-link {{ $title == 'Pendaftar' ? 'active' : '' }}" href="{{ route('pendaftar') }}">
                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                    Pendaftar
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>