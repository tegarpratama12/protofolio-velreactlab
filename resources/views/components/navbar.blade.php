<nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
    <div class="container">

        <a href="#" class="navbar-brand">Velreact<span class="text-primary"> .Lab</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('*') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
