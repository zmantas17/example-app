<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container-fluid">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand" href="/"> Renginių portalas </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item">
                    <a href="#" class="nav-link">Pradinis</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Apie projektą</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kontaktai</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Renginiai</a>
                </li>
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li> 
                @endguest
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                </li> 
                @endauth
            </ul>
        </div>
    </div>
</nav>