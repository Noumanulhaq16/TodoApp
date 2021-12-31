<div id="header" class="app-header">

    <div class="desktop-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
            data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
            data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="brand">
        <a href="#" class="brand-logo">
            <span class="brand-img">
                <span class="brand-img-text text-theme">H</span>
            </span>
            <span class="brand-text">Todo App</span>
        </a>
    </div>

    <div class="menu">

        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-img online">
                    <img src="assets/img/user/profile.jpg" height="60" alt="Profile" />
                </div>
                <div class="menu-text d-sm-block d-none"><span class="__cf_email__"
                        data-cfemail="0d787e687f636c60684d6c6e6e62786379236e6260">Love You</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="#">LOGOUT <i
                        class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
            </div>
        </div>
    </div>


    <form class="menu-search" method="POST" name="header_search_form">
        <div class="menu-search-container">
            <div class="menu-search-icon"><i class="bi bi-search"></i></div>
            <div class="menu-search-input">
                <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
            </div>
            <div class="menu-search-icon">
                <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i
                        class="bi bi-x-lg"></i></a>
            </div>
        </div>
    </form>

</div>
