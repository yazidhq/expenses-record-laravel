<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-link text-dark text-decoration-none">
        <i class="bi bi-box-arrow-left"></i>
        Sign out
    </button>
</form>