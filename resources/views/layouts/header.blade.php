<!-- Header -->
<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="/" class="navbar-brand logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="/" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="{{ \Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{ Request::is('doctors') ? 'active' : '' }}">
                    <a href="{{ route('doctors') }}">Doctors</a>
                </li>
                <li class="{{ Request::is('patient-login') ? 'active' : '' }}">
                    <a href="{{ route('patient-login') }}">Patient Login</a>
                </li>
                <li class="{{ Request::is('doctor-login') ? 'active' : '' }}">
                    <a href="{{ route('doctor-login') }}">Doctor Login</a>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Contact</p>
                    <p class="contact-info-header"> +880 1837 023812</p>
                </div>
            </li>

        </ul>
    </nav>
</header>
<!-- /Header -->
