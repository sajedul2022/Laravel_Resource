<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('home') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="/assets/images/logo.png" srcset="./images/logo2x.png 2x"
                    alt="logo">
                <img class="logo-dark logo-img" src="/assets/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x"
                    alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="/assets/images/logo-small.png"
                    srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
                            <span class="nk-menu-text">Default</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Sales</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                            <span class="nk-menu-text">Analytics</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Applications</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                            <span class="nk-menu-text">Projects</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project
                                        Cards</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project
                                        List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">User Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">User List - Default</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">User List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">User List - Compact</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">User Details - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">User Profile - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span class="nk-menu-text">User
                                        Contact - Card</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>
                            <span class="nk-menu-text">Orders</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Order List - Default</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Order List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Order List - Sales</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt-fill"></em></span>
                            <span class="nk-menu-text">Applications</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Messages</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span class="nk-menu-text">Inbox
                                        / Mail</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">File Manager</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span class="nk-menu-text">Chats
                                        / Messenger</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Calendar</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Kanban Board</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Invoice</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/invoice-details.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Invoice Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                            <span class="nk-menu-text">Products</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="products" class="nk-menu-link"><span
                                        class="nk-menu-text">Product List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Product </span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/" class="nk-menu-link"><span
                                        class="nk-menu-text">Product Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/pricing-table.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span>
                            <span class="nk-menu-text">Pricing Table</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/gallery.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>
                            <span class="nk-menu-text">Image Gallery</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
