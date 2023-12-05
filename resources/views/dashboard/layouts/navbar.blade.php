<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'dashboard') ? 'active' : '' }}"
                    aria-current="page" href="{{ route('dashboard.index') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'expenses') ? 'active' : '' }}"
                    href="{{ route('expenses.index') }}">
                    <span data-feather="file"></span>
                    Expenses
                </a>
            </li>
        </ul>
    </div>
</nav>