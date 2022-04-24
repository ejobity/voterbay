 <!-- sidebar @s -->
 <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo-small.png') }}" srcset="{{ asset('images/logo-small2x.png 2x') }}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('elections-index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon fas fa-person-booth"></em></span>
                            <span class="nk-menu-text">My Elections</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-heading"><h6 class="overline-title text-primary-alt">Menu</h6></li>
                    
                    <li class="nk-menu-item">
                        <a href="{{route('organizations-index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon fas fa-building"></em></span>
                            <span class="nk-menu-text">Organization</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('candidates-index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text">Candidates</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon fas fa-users"></em></span>
                            <span class="nk-menu-text">Voters</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('voter.index')}}" class="nk-menu-link"><span class="nk-menu-text">Voter List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('group.index')}}" class="nk-menu-link"><span class="nk-menu-text">Voter Groups</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('profile.show')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
                            <span class="nk-menu-text">Admin profile</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    {{-- <li class="nk-menu-item">
                        <a href="html/lms/settings.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li> --}}<!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
