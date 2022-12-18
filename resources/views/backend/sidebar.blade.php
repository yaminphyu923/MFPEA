<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item @yield('dashboard-active')">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa-solid fa-table-cells-large pr-2"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item @yield('customer-active')">
            <a class="nav-link" href="{{ route('customers.index') }}">
                <i class="fa-solid fa-users pr-2"></i>
                <span class="menu-title"> Customers</span>
            </a>
        </li>

        <li class="nav-item @yield('member-active')">
            <a class="nav-link" href="{{ route('members.index') }}">
                <i class="fa-solid fa-users pr-2"></i>
                <span class="menu-title"> Members</span>
            </a>
        </li>

        <li class="nav-item @yield('active-member-active')">
            <a class="nav-link" href="{{ route('active-member') }}">
                <i class="fas fa-users mr-1"></i>
                <span class="menu-title">Active Member</span>
            </a>
        </li>

        <li class="nav-item @yield('near-expired-member-active')">
            <a class="nav-link" href="{{ route('near-expired-member') }}">
                <i class="fas fa-users mr-1"></i>
                <span class="menu-title">Near Expired Member</span>
            </a>
        </li>

        <li class="nav-item @yield('expired-member-active')">
            <a class="nav-link" href="{{ route('expired-member') }}">
                <i class="fas fa-users mr-1"></i>
                <span class="menu-title">Expired Member</span>
            </a>
        </li>

        <li class="nav-item @yield('lab-active')">
            <a class="nav-link" href="{{ route('lab') }}">
                <i class="fas fa-flask mr-1"></i>
                <span class="menu-title">Laboratory</span>
            </a>
        </li>

        <li class="nav-item @yield('finance-active')">
            <a class="nav-link" href="{{ route('ad-finance.index') }}">
                <i class="fas fa-coins mr-1"></i>
                <span class="menu-title">Finance</span>
            </a>
        </li>

        <li class="nav-item @yield('stock-active')">
            <a class="nav-link" href="{{ route('fidsl_general_stock.index') }}">
                <i class="fas fa-warehouse mr-1"></i>
                <span class="menu-title">Stock</span>
            </a>
        </li>

        <li class="nav-item @yield('user_management-active')">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title mr-1">User Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">User</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index') }}">Role</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('permissions.index') }}">Permission</a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- <li class="nav-item @yield('userguide-active')">
            <a class="nav-link" href="{{ route('user-guide') }}" target="_blank">
                <i class="fab fa-glide mr-1"></i>
                <span class="menu-title">User Guide</span>
            </a>
        </li> --}}
    </ul>
</nav>
