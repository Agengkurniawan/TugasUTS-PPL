<nav class="navbar navbar-expand-lg" style="background-color: #bce8f1;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/home">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('addresses*') ? 'active' : '' }}" href="{{ route('addresses.index') }}">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('Contact*') ? 'active' : '' }}" href="{{ route('Contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
