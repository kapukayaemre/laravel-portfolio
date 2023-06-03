<div class="app-sidebar">
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="logo-icon"><span class="logo-text">Neptune</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="{{ asset('../../assets/images/avatars/avatar.png') }}">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li class="active-page">
                <a href="{{ route('dashboard') }}" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
            </li>
            <li class="sidebar-title">
                Sections
            </li>
            {{--? Hero Section --}}
            <li class="{{ Route::is('admin.hero.*') || Route::is('admin.typer-title.*') ? 'open' : '' }}">
                <a href="#"><i class="material-icons-two-tone">burst_mode</i>Ana Resim Bölümü<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('admin.typer-title.index') }}" class="{{ Route::is('admin.typer-title.index') ? 'active' : '' }}">Hareketli Başlık</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.hero.index') }}" class="{{ Route::is('admin.hero.index') ? 'active' : '' }}">Ana Resim</a>
                    </li>
                </ul>
            </li>

            {{--? Services Section --}}
            <li class="{{ Route::is('admin.services.*') ? 'open' : '' }}">
                <a href="#"><i class="material-icons-two-tone">lightbulb</i>Services Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? About Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">person</i>About Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Portfolio Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">portrait</i>Portfolio Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Skills Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">star_rate</i>Skills Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Experiences Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">explore</i>Experiences Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Portfolio Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">question_answer</i>Feedback Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Blog Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">article</i>Blog Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Contact Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">call</i>Contact Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>

            {{--? Footer Section --}}
            <li>
                <a href="#"><i class="material-icons-two-tone">table_chart</i>Footer Section<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Test</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Test</a>
                    </li>
                </ul>
            </li>


            {{--? Profile Section--}}
            <li>
                <a href="#"><i class="material-icons-two-tone">manage_accounts</i><span style="color: lawngreen; !important;">{{ auth()->user()->first_name }}</span><i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('profile.edit') }}">Profil</a>
                    </li>
                    <li>
                        <a href="header-full-width.html">Ayarlar</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a onclick="event.preventDefault(); this.closest('form').submit();" href="#" class="text-danger">Logout</a>
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
