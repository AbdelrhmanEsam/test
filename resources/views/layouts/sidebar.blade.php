<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Test</li>
        @if (Auth::user()->role == 'SuperAdmin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="mdi mdi-bus menu-icon"></i>
                    <span class="menu-title">User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="mdi mdi-bus menu-icon"></i>
                    <span class="menu-title">Tryers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="mdi mdi-bus menu-icon"></i>
                    <span class="menu-title">Competition</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href=" ">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title"> Session</span>
                </a>
            </li>
        @endif
        {{-- <li class="nav-item nav-category">Main Data</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('driver.index') }}">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Driver Master Data </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('route.index') }}">
                <i class="menu-icon mdi mdi-map-marker-circle"></i>
                <span class="menu-title">Route Master Data</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('employee.index') }}">
                <i class="menu-icon mdi mdi-account-convert"></i>
                <span class="menu-title">Employee Master Data</span>
            </a>
        </li>

        <li class="nav-item nav-category">Other</li>
        {{--        <li class="nav-item"> --}}
        {{--            <a class="nav-link" href="pages/assign-seets.html"> --}}
        {{--                <i class="menu-icon mdi mdi-account-network"></i> --}}
        {{--                <!-- <i class="menu-icon mdi mdi-layers-outline"></i> --> --}}
        {{--                <span class="menu-title">Assign employees to seats</span> --}}
        {{--            </a> --}}
        {{--        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('invoice.create') }}">
                <i class="menu-icon mdi mdi-calculator"></i>
                <span class="menu-title"> Invoices </span>
            </a>
        </li>
        <li class="nav-item nav-category">Missions</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mission.index') }}">
                <i class="menu-icon mdi mdi-cached"></i>
                <span class="menu-title">Missions request</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mission_types.index') }}">
                <i class="menu-icon mdi mdi-format-list-bulleted-type"></i>
                <span class="menu-title">Missions types</span>
            </a>
        </li> --}}
    </ul>
</nav>
