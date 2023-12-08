<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'dashboard') ? 'active' : '' }}"
                    aria-current="page" href="{{ route('dashboard') }}">
                    <i class="bi bi-house-door"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'income') ? 'active' : '' }}"
                    href="{{ route('income.index') }}">
                    <i class="bi bi-cash-stack"></i>
                    Incomes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'expenses') ? 'active' : '' }}"
                    href="{{ route('expenses.index') }}">
                    <i class="bi bi-file-bar-graph"></i>
                    Expenses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'category') ? 'active' : '' }}"
                    href="{{ route('category.index') }}">
                    <i class="bi bi-tags"></i>
                    Category
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link {{ Str::startsWith(request()->route()->getName(), 'user') ? 'active' : '' }}"
                    href="{{ route('user.index') }}">
                    <i class="bi bi-person-video2"></i>
                    Profile
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="bi bi-person-fill-lock"></i>
                    Admin
                </a>
            </li>
            @endif
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-link text-dark text-decoration-none">
                        <i class="bi bi-box-arrow-left"></i>
                        Sign out
                    </button>
                </form>
            </li>

        </ul>
    </div>
</nav>