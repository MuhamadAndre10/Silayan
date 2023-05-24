<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start ms-4 my-3 border-0 bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times text-secondary position-absolute end-0 d-none d-xl-none top-0 cursor-pointer p-3 opacity-5"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Silayan Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="navbar-collapse collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center text-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center text-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase font-weight-bolder opacity-6 text-xs">Data Penduduk</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'showPopulations') == true ? 'active' : '' }}"
                    href="{{ route('showPopulations') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center text-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Penduduk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'addFormPopulation') == true ? 'active' : '' }}"
                    href="{{ route('addFormPopulation') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center text-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tambah Data</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase font-weight-bolder opacity-6 text-xs">Surat Pengajuan</h6>
            </li>

        </ul>
    </div>
</aside>
