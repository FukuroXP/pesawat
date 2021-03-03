<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <h2 class="brand-text mb-0">Report</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        @php($x =1 )
        @if($x == 1)
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="/dash"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Report</span>
                </li>
                <li class=" nav-item {{ request()->is('admin/blogs') ? 'active' : '' }}"><a href=""><i class="feather icon-clipboard"></i><span class="menu-title" data-i18n="Email">All Report</span></a>
                </li>
                <li class=" nav-item {{ request()->is('admin/tags') ? 'active' : '' }}"><a href=""><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Email">Validated Report</span></a>
                </li>
                <li class=" nav-item {{ request()->is('admin/tags') ? 'active' : '' }}"><a href=""><i class="feather icon-list"></i><span class="menu-title" data-i18n="Email">Report Reason</span></a>
                </li>
                <li class=" navigation-header"><span>Users</span>
                </li>
                <li class=" nav-item {{ request()->is('admin/tags') ? 'active' : '' }}"><a href=""><i class="feather icon-users"></i><span class="menu-title" data-i18n="Email">Users</span></a>
                </li>
            </ul>
        </div>
        @else
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="/dash"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Report</span>
                </li>
                <li class=" nav-item {{ request()->is('admin/blogs') ? 'active' : '' }}"><a href=""><i class="feather icon-clipboard"></i><span class="menu-title" data-i18n="Email">All Report</span></a>
                </li>
                <li class=" nav-item {{ request()->is('admin/tags') ? 'active' : '' }}"><a href=""><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Email">Validated Report</span></a>
                </li>
            </ul>
        </div>
        @endif
    </div>
    <!-- END: Main Menu-->
