{{-- @dd(); --}}
<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
                <a class="nav-link" href="javascript: void(0);" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            <!--end::Fullscreen Toggle-->

            {{-- Start Language Mode --}}
            <li class="nav-item dropdown me-2">
                <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                    id="bd-language" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                    data-bs-display="static">
                    <span class="" id="bd-language-text">{{ strtoupper(Lang::locale()) }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-language-text"
                    style="--bs-dropdown-min-width: 8rem;">
                    <li></li>
                    <li>
                        <a href="{{ route('change-locale', 'en') }}" class="dropdown-item d-flex align-items-center"
                            aria-pressed="false">
                            <span class="flag-icon flag-icon-us me-2"></span>
                            English
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('change-locale', 'id') }}" class="dropdown-item d-flex align-items-center"
                            aria-pressed="false">
                            <span class="flag-icon flag-icon-id me-2"></span>
                            Indonesia
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </a>
                    </li>
                </ul>
            </li>


            {{-- Start Theme Mode --}}
            <li class="nav-item dropdown">
                <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                    id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                    data-bs-display="static">
                    <span class="theme-icon-active">
                        <i class="my-1"></i>
                    </span>
                    <span class="d-lg-none ms-2" id="bd-theme-text"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text"
                    style="--bs-dropdown-min-width: 8rem;">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="light" aria-pressed="false">
                            <i class="bi bi-sun-fill me-2"></i>
                            Light
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="dark" aria-pressed="false">
                            <i class="bi bi-moon-fill me-2"></i>
                            Dark
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="auto" aria-pressed="true">
                            <i class="bi bi-laptop me-2"></i>
                            Auto
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                </ul>
            </li>
            {{-- End Theme Mode --}}

        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->
