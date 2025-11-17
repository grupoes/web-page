<div class="container-fluid">
    <ul class="list-unstyled topnav-menu float-end mb-0">

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="admin/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ms-1">
                    Nik Patel <i class="uil uil-angle-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido !</h6>
                </div>

                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>Mi Perfil</span>
                </a>

                <div class="dropdown-divider"></div>

                <a href="#" class="dropdown-item notify-item" onclick="cerrarSesion()">
                    <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Salir</span>
                </a>

            </div>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="/home" class="logo logo-dark">
            <span class="logo-sm">
                <img src="admin/assets/images/grupoes.png" alt="" height="24">
                <!-- <span class="logo-lg-text-light">Shreyu</span> -->
            </span>
            <span class="logo-lg">
                <img src="admin/assets/images/grupoes.png" alt="" height="34">
                <span class="logo-lg-text-dark">GRUPO ES CONSULTORES</span>
            </span>
        </a>

        <a href="/home" class="logo logo-light">
            <span class="logo-sm">
                <img src="admin/assets/images/logo-sm.png" alt="" height="24">
            </span>
            <span class="logo-lg">
                <img src="admin/assets/images/logo-light.png" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile">
                <i data-feather="menu"></i>
            </button>
        </li>

        <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </li>

    </ul>
    <div class="clearfix"></div>
</div>