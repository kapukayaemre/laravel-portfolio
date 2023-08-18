<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ isset($generalSettings) ? asset($generalSettings->logo) : asset("frontend/assets/images/logo.png") }}" alt="Rabins">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route::currentRouteName() === "home" ? "#home-page" : url("/") }}">Anasayfa</a>
                </li>
                @if(Route::currentRouteName() === "home")
                    <li class="nav-item">
                        <a class="nav-link" href="#about-page">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio-page">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills-page">Yetenekler</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact-page">İletişim</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home.blogs") }}">Bloglar</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
