<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="{{ URL::to('dashboard') }}">
        <img class="brand-img d-inline-block" src="{{ asset('front/img/logo.png') }}" alt="brand" style="width: 100px;"/>
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{ Auth::user()->gravatar }}" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{ auth()->user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <div class="dropdown-divider"></div>
                <form action="{{ URL::to('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /Top Navbar -->

<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item {{ ($title === "Dashboard") ? 'active' : '' }}">
                    <a class="nav-link" href="{{ URL::to('dashboard') }}">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Konten Website</span>
                <span>&nbsp;</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <ul class="nav flex-column">
                        <li class="nav-item {{ ($title === "berita") ? 'active' : '' }}">
                            <a class="nav-link" href="{{ URL::to('d_berita') }}">
                                <span class="feather-icon"><i data-feather="archive"></i></span>
                                <span class="nav-link-text">Berita</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Data</span>
                <span>&nbsp;</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                        <span class="feather-icon"><i data-feather="layout"></i></span>
                        <span class="nav-link-text">Data Master</span>
                    </a>
                    <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item {{ ($title === "kategori_berita") ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ URL::to('kategori_berita') }}">Kategori Berita</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> 
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->