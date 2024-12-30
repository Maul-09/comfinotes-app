<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img src="{{ asset('image/logo-jurnal.png') }}" alt="" class="logo-comfinotes" viewbox="0 0 53 53">
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>


<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="aset/javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('image/profile-2.jpg') }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>Mauls</b></span>
                        <small class="font-w500">Admin</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    </a>
                    <a href="{{ route('login') }}" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li><a href="{{ route('dashboard-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-025-dashboard"></i>
                <span class="nav-text">Dashboard</span>
            </a></li>

            <li><a href="{{ route('komunitas-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-043-menu"></i>
                <span class="nav-text">Komunitas</span>
            </a></li>

            <li><a href="{{ route('statistik-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-041-graph"></i>
                <span class="nav-text">Statistik</span>
            </a></li>

            <li><a href="{{ route('riwayat-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-005-back-arrow"></i>
                <span class="nav-text">Transaksi</span>
            </a></li>

        </ul>
    </div>
</div>
