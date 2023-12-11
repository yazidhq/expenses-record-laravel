<!-- Bottom Navbar -->
<nav class="navbar navbar-light bg-light border-top navbar-expand fixed-top">
  <ul class="navbar-nav nav-justified w-100">
    <li class="nav-item">
      <a href="#" class="nav-link text-start mx-1">
        {{ Str::upper(auth()->user()->name) }}
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle text-end px-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-lines-fill"></i>
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>  
          <a class="dropdown-item" href="{{ route('user.index') }}">
            <i class="bi bi-person-lines-fill"></i> Profile
          </a>
        </li>
        @if (auth()->user()->role == 'admin')
        <li>  
          <a class="dropdown-item" href="{{ route('admin.index') }}">
            <i class="bi bi-person-fill-lock"></i> Admin
          </a>
        </li>
        @endif
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-link text-dark text-decoration-none">
                <i class="bi bi-box-arrow-left"></i>
                Sign out
            </button>
        </form>
        </li>
      </ul>
    </li>
    
  </ul>
</nav>