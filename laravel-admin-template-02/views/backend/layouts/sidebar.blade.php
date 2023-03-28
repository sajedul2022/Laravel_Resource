<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}" >
        <div class="sidebar-brand-icon ">
        </div>
        <div class="sidebar-brand-text mx-3 sidebar-brand-icon"> Admin <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <a class="nav-link" href="{{ route('home') }}" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Website</span>
        </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('products.index') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Courses</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admission') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Admission</span>
        </a>

        {{-- <x-nav-link :href="route('admission')" :active="request()->routeIs('admission')">
            {{ __('Admission') }}
        </x-nav-link> --}}
    </li>

    @can('lead-management')
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('lead.index') }}" >
                <i class="fas fa-fw fa-cog"></i>
                <span>Leads</span>
            </a>

            {{-- <x-nav-link :href="route('lead.index')" :active="request()->routeIs('lead.index')">
                {{ __('Leads') }}
            </x-nav-link> --}}
        </li>
    @endcan

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Students</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Attendance</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Quiz</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Invoice | Payment</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Reporting</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/backend_assets/#" data-toggle="collapse"
            data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="/backend_assets/login.html">Login</a>
                <a class="collapse-item" href="/backend_assets/register.html">Register</a>
                <a class="collapse-item" href="/backend_assets/forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="/backend_assets/404.html">404 Page</a>
                <a class="collapse-item" href="/backend_assets/blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}



    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Result</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">





</ul>
