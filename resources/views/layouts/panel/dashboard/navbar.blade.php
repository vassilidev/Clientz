<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
     id="sidenavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ route('panel.dashboard') }}">{{ config('app.name') }}</a>
    <form class="form-inline me-auto d-none d-lg-block me-3">
        <div class="input-group input-group-joined input-group-solid">
            <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search"/>
            <div class="input-group-text"><i class="fas fa-search"></i></div>
        </div>
    </form>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown no-caret me-3 d-lg-none">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
            <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up"
                 aria-labelledby="searchDropdown">
                <form class="form-inline me-auto w-100">
                    <div class="input-group input-group-joined input-group-solid">
                        <input class="form-control pe-0" type="text" placeholder="Search for..."/>
                        <div class="input-group-text"><i class="fas fa-search"></i></div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <img class="img-fluid" src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}"/>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img"
                         src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}"/>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    Account
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item text-danger" href="javascript:void(0)"
                       onclick="this.closest('form').submit()">
                        <div class="dropdown-item-icon text-danger">
                            <i class="fas fa-sign-out"></i>
                        </div>
                        Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
