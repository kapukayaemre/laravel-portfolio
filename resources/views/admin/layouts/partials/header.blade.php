<div class="app-header">
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-nav" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                    </li>
                    <li class="nav-item dropdown hidden-on-mobile">
                        <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons">add</i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                            <li><a class="dropdown-item" href="#">New Workspace</a></li>
                            <li><a class="dropdown-item" href="#">New Board</a></li>
                            <li><a class="dropdown-item" href="#">Create Project</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-on-mobile">
                        <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons-outlined">explore</i>
                        </a>
                        <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                            <li>
                                <h6 class="dropdown-header">Repositories</h6>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <h5 class="dropdown-item-title">
                                        Neptune iOS
                                        <span class="badge badge-warning">1.0.2</span>
                                        <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                    </h5>
                                    <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <h5 class="dropdown-item-title">
                                        Neptune Android
                                        <span class="badge badge-info">dev</span>
                                        <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                    </h5>
                                    <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                </a>
                            </li>
                            <li class="dropdown-btn-item d-grid">
                                <button class="btn btn-primary">Create new repository</button>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link active" href="#">Applications</a>
                    </li>
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link" href="#">Reports</a>
                    </li>
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link" href="#">Projects</a>
                    </li>

                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link language-dropdown-toggle" style="color: lawngreen; !important;" href="#" id="languageDropDown" data-bs-toggle="dropdown"><strong>{{ auth()->user()->first_name }}</strong></a>
                        <ul class="dropdown-menu dropdown-menu-end language-dropdown d-flex" aria-labelledby="languageDropDown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <img src="{{ asset('assets/images/icons/user.png') }}" alt="">Profil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="{{ asset('assets/images/icons/cog.png') }}" alt="">Ayarlar
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item text-danger" href="#">
                                        <img src="{{ asset('assets/images/icons/logout.png') }}" alt="">Çıkış
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
