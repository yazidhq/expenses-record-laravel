<!-- Bottom Navbar -->
<nav class="navbar navbar-light bg-light border-top navbar-expand fixed-bottom">
    <ul class="navbar-nav nav-justified w-100">
      <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link text-center {{ Str::startsWith(request()->route()->getName(), 'dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door"></i>
            <span class="small d-block">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('income.index') }}" class="nav-link text-center {{ Str::startsWith(request()->route()->getName(), 'income') ? 'active' : '' }}">
            <i class="bi bi-wallet"></i>
            <span class="small d-block">Income</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('expenses.index') }}" class="nav-link text-center {{ Str::startsWith(request()->route()->getName(), 'expenses') ? 'active' : '' }}">
            <i class="bi bi-pci-card-network"></i>
            <span class="small d-block">Expenses</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link text-center {{ Str::startsWith(request()->route()->getName(), 'category') ? 'active' : '' }}">
            <i class="bi bi-tags"></i>
            <span class="small d-block">Category</span>
        </a>
      </li>
    </ul>
</nav>