<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="#">
            EMS
        </a>

        <div class="d-flex align-items-center">

            <span class="me-3">
                {{ Auth::user()->name ?? 'Guest' }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-outline-danger btn-sm">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>