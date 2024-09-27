{{-- sidebar --}}
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('backend/assets/img/logo.png') }}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{ route('SuperAdminDashboard') }}"
                    class="nav-link {{ isActiveRoute('super-admin/dashboard*') }}">Neptune</a>
            </li>
        </ul>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{ url('/super-admin/dashboard') }}" class="dropdown-toggle {{ isActiveRoute('super-admin/dashboard') }}">
                    <div class="">
                        <i class="las la-home"></i>
                        <span>Dashboards</span>
                    </div>
                </a>
            </li>
            <li class="menu-title">Client</li>
            <li class="menu">
                <a href="" class="dropdown-toggle {{ isActiveRoute('roles/create') }}">
                    <div class="">
                        <i class="las la-desktop"></i>
                        <span>Create Role</span>
                    </div>
                </a>
                <a href="" class="dropdown-toggle {{ isActiveRoute('clients/create') }}">
                    <div class="">
                        <i class="las la-desktop"></i>
                        <span>Create Client</span>
                    </div>
                </a>
                <a href="" class="dropdown-toggle {{ isActiveRoute('clients') }}">
                    <div class="">
                        <i class="las la-desktop"></i>
                        <span>All Clients</span>
                    </div>
                </a>
            </li>
            <li class="menu-title">Users</li>
            <li class="menu-title">Settings</li>
            <li class="menu-title">Pages</li>
        </ul>
    </nav>
</div>
