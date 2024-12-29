<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Sistem Pakar</h1>
        </a>

        <!-- Navigasi Utama -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ URL::to('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ URL::to('/konsultasi') }}" class="{{ Request::is('konsultasi') ? 'active' : '' }}">Konsultasi</a></li>
                <li><a href="{{ URL::to('/info-penyakit') }}" class="{{ Request::is('info-penyakit') ? 'active' : '' }}">Informasi Penyakit</a></li>
                @auth
                <!-- Dropdown User -->
                <li class="nav-item dropdown ms-3">
                    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-2" style="font-size: 1.2rem;"></i>
                        <span>{{ auth()->user()->name }}</span>
                        <i class="bi bi-chevron-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ URL::to('/dashboard') }}">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ URL::to('/logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Tombol Login -->
        @guest
            <a class="btn-getstarted" href="{{ URL::to('/login') }}">Login</a>
        @endguest
    </div>
</header>
