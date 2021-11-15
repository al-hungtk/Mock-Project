<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="?controller=admin&action=index" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Datta Able</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                    <a href="?controller=admin&action=index" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                    class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Change Info
                            User</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a
                                href="?controller=admin&action=change-password&id=<?php echo $_SESSION['auth']['id']?>"
                                class="">Change Pass<span class="pcoded-badge label label-danger">NEW</span></a></li>

                    </ul>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                    class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="?controller=category&action=list_category"
                                class="">Category<span class="pcoded-badge label label-danger">NEW</span></a></li>
                        <li class=""><a href="?controller=post&action=index" class="">Post<span
                                    class="pcoded-badge label label-danger">NEW</span></a></li>
                        <li class=""><a href="?controller=admin&action=list_admin" class="">Admin<span
                                    class="pcoded-badge label label-danger">NEW</span></a></li>
                        <li class=""><a href="?controller=home&action=home" class="">HOME PAGE USER<span
                                    class="pcoded-badge label label-danger">NEW</span></a></li>
                    </ul>
                </li>

                <li data-username="Disabled Menu" class="nav-item disabled"><a
                        href="?controller=admin&action=logout" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-power"></i></span><span class="pcoded-mtext">LGOUT</span></a></li>
            </ul>
        </div>
    </div>
</nav>