<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="#">
            <img alt="Logo" src="{{ asset("assets/assets/media/logos/logo-1-dark.svg") }}" class="h-25px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

                <!--! DASHBOARD LINK -->
                <div class="menu-item">
                    <a class="menu-link {{ Route::is("dashboard") ? "active" : "" }}" href="{{ route("dashboard") }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                <!--! HERO LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.hero.*") || Route::is("admin.typer-title.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21ZM16 11V9C16 6.8 14.2 5 12 5C9.8 5 8 6.8 8 9V11C7.2 11 6.5 11.7 6.5 12.5C6.5 13.3 7.2 14 8 14V15C8 17.2 9.8 19 12 19C14.2 19 16 17.2 16 15V14C16.8 14 17.5 13.3 17.5 12.5C17.5 11.7 16.8 11 16 11ZM13.4 15C13.7 15 14 15.3 13.9 15.6C13.6 16.4 12.9 17 12 17C11.1 17 10.4 16.5 10.1 15.7C10 15.4 10.2 15 10.6 15H13.4Z" fill="black"/>
                                        <path d="M9.2 12.9C9.1 12.8 9.10001 12.7 9.10001 12.6C9.00001 12.2 9.3 11.7 9.7 11.6C10.1 11.5 10.6 11.8 10.7 12.2C10.7 12.3 10.7 12.4 10.7 12.5L9.2 12.9ZM14.8 12.9C14.9 12.8 14.9 12.7 14.9 12.6C15 12.2 14.7 11.7 14.3 11.6C13.9 11.5 13.4 11.8 13.3 12.2C13.3 12.3 13.3 12.4 13.3 12.5L14.8 12.9ZM16 7.29998C16.3 6.99998 16.5 6.69998 16.7 6.29998C16.3 6.29998 15.8 6.30001 15.4 6.20001C15 6.10001 14.7 5.90001 14.4 5.70001C13.8 5.20001 13 5.00002 12.2 4.90002C9.9 4.80002 8.10001 6.79997 8.10001 9.09997V11.4C8.90001 10.7 9.40001 9.8 9.60001 9C11 9.1 13.4 8.69998 14.5 8.29998C14.7 9.39998 15.3 10.5 16.1 11.4V9C16.1 8.5 16 8 15.8 7.5C15.8 7.5 15.9 7.39998 16 7.29998Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Hero Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.hero.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.hero.*") ? "active" : "" }}" href="{{ route("admin.hero.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Hero</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.typer-title.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.typer-title.*") ? "active" : "" }}" href="{{ route("admin.typer-title.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Hareketli Başlık</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! SERVICES LINK -->
                <div class="menu-item">
                    <a class="menu-link {{ Route::is("admin.service.*") ? "active" : "" }}" href="{{ route("admin.service.index") }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black"/>
                                    <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black"/>
                                    <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black"/>
                                    <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Hizmetler Bölümü</span>
                    </a>
                </div>

                <!--! ABOUT LINK -->
                <div class="menu-item">
                    <a class="menu-link {{ Route::is("admin.about.*") ? "active" : "" }}" href="{{ route("admin.about.index") }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Hakkımda Bölümü</span>
                    </a>
                </div>

                <!--! PORTFOLIO LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.category.*") || Route::is("admin.portfolio-item.*") || Route::is("admin.portfolio-section-setting.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                                        <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                                        <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Portfolio Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.category.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.category.*") ? "active" : "" }}" href="{{ route("admin.category.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kategori</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.portfolio-item.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.portfolio-item.*") ? "active" : "" }}" href="{{ route("admin.portfolio-item.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Portfolio İçerikleri</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.portfolio-section-setting.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.portfolio-section-setting.*") ? "active" : "" }}" href="{{ route("admin.portfolio-section-setting.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Bölüm Ayarları</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! SKILLS LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.skills-section-settings.*") || Route::is("admin.skills-items.*")  ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Yetenekler Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.skills-items.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.skills-items.*") ? "active" : "" }}" href="{{ route("admin.skills-items.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Yetenekler</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.skills-section-settings.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.skills-section-settings.*") ? "active" : "" }}" href="{{ route("admin.skills-section-settings.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Yetenek Bölümü Ayarları</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! EXPERIENCES LINKS -->
                <div class="menu-item">
                    <a class="menu-link {{ Route::is("admin.experiences.*") ? "active" : "" }}" href="{{ route("admin.experiences.index") }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"/>
                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Tecrübeler Bölümü</span>
                    </a>
                </div>

                <!--! FEEDBACK LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.feedback.*") || Route::is("admin.feedback-section-settings.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black"/>
                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Geri Bildirim Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.feedback.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.feedback.*") ? "active" : "" }}" href="{{ route("admin.feedback.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Geri Bildirimler</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.feedback-section-settings.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.feedback-section-settings.*") ? "active" : "" }}" href="{{ route("admin.feedback-section-settings.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Geri Bildirim Ayarları</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! BLOG LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.blog-category.*") || Route::is("admin.blog.*") || Route::is("admin.blog-section-settings.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M18 22C19.7 22 21 20.7 21 19C21 18.5 20.9 18.1 20.7 17.7L15.3 6.30005C15.1 5.90005 15 5.5 15 5C15 3.3 16.3 2 18 2H6C4.3 2 3 3.3 3 5C3 5.5 3.1 5.90005 3.3 6.30005L8.7 17.7C8.9 18.1 9 18.5 9 19C9 20.7 7.7 22 6 22H18Z" fill="black"/>
                                        <path d="M18 2C19.7 2 21 3.3 21 5H9C9 3.3 7.7 2 6 2H18Z" fill="black"/>
                                        <path d="M9 19C9 20.7 7.7 22 6 22C4.3 22 3 20.7 3 19H9Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Blog Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.blog-category.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.blog-category.*") ? "active" : "" }}" href="{{ route("admin.blog-category.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kategoriler</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.blog.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.blog.*") ? "active" : "" }}" href="{{ route("admin.blog.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blog Listesi</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.blog-section-settings.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.blog-section-settings.*") ? "active" : "" }}" href="{{ route("admin.blog-section-settings.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blog Ayarlar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! CONTACT LINKS -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.contact-section-settings.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.89998L14.8 14.8L13.4 13.3999C14.2 12.5999 14.2 11.4001 13.4 10.6001C12.6 9.80006 11.4 9.80006 10.6 10.6001L9.20001 9.19991L16.1 6.49996C17 6.19996 17.8 6.99998 17.5 7.89998ZM12.7 11.3C12.3 10.9 11.7 10.9 11.3 11.3C10.9 11.7 10.9 12.2999 11.3 12.6999C11.7 13.0999 12.3 13.0999 12.7 12.6999C13.1 12.2999 13.1 11.7 12.7 11.3Z" fill="black"/>
                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM16.1 6.5L9.20001 9.19995L6.5 16.1001C6.2 17.0001 6.99999 17.8 7.89999 17.5L14.8 14.8L17.5 7.90002C17.8 7.00002 17 6.2 16.1 6.5Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">İletişim Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.contact-section-settings.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.contact-section-settings.*") ? "active" : "" }}" href="{{ route("admin.contact-section-settings.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">İletişim Ayarları</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! FOOTER SOCIAL LINKS -->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion
                     {{ Route::is("admin.footer-social.*") ||
                        Route::is("admin.footer-info.*") ||
                        Route::is("admin.footer-contact-info.*") ||
                        Route::is("admin.footer-useful-links.*") ||
                        Route::is("admin.footer-help-links.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6 7C12 7 11.6 6.6 11.6 6V3C11.6 2.4 12 2 12.6 2C13.2 2 13.6 2.4 13.6 3V6C13.6 6.6 13.2 7 12.6 7ZM10 7.59998C10.5 7.29998 10.6 6.69995 10.4 6.19995L9 3.80005C8.7 3.30005 8.10001 3.20002 7.60001 3.40002C7.10001 3.70002 7.00001 4.30005 7.20001 4.80005L8.60001 7.19995C8.80001 7.49995 9.1 7.69995 9.5 7.69995C9.7 7.69995 9.9 7.69998 10 7.59998ZM8 9.30005C8.3 8.80005 8.10001 8.20002 7.60001 7.90002L5.5 6.69995C5 6.39995 4.40001 6.59998 4.10001 7.09998C3.80001 7.59998 4 8.2 4.5 8.5L6.60001 9.69995C6.80001 9.79995 6.90001 9.80005 7.10001 9.80005C7.50001 9.80005 7.9 9.70005 8 9.30005ZM7.20001 12C7.20001 11.4 6.80001 11 6.20001 11H4C3.4 11 3 11.4 3 12C3 12.6 3.4 13 4 13H6.20001C6.70001 13 7.20001 12.6 7.20001 12Z" fill="black"/>
                                        <path opacity="0.3" d="M17.4 5.5C17.4 6.1 17 6.5 16.4 6.5C15.8 6.5 15.4 6.1 15.4 5.5C15.4 4.9 15.8 4.5 16.4 4.5C17 4.5 17.4 5 17.4 5.5ZM5.80001 17.1L7.40001 16.1C7.90001 15.8 8.00001 15.2 7.80001 14.7C7.50001 14.2 6.90001 14.1 6.40001 14.3L4.80001 15.3C4.30001 15.6 4.20001 16.2 4.40001 16.7C4.60001 17 4.90001 17.2 5.30001 17.2C5.50001 17.3 5.60001 17.2 5.80001 17.1ZM8.40001 20.2C8.20001 20.2 8.10001 20.2 7.90001 20.1C7.40001 19.8 7.3 19.2 7.5 18.7L8.30001 17.3C8.60001 16.8 9.20002 16.7 9.70002 16.9C10.2 17.2 10.3 17.8 10.1 18.3L9.30001 19.7C9.10001 20 8.70001 20.2 8.40001 20.2ZM12.6 21.2C12 21.2 11.6 20.8 11.6 20.2V18.8C11.6 18.2 12 17.8 12.6 17.8C13.2 17.8 13.6 18.2 13.6 18.8V20.2C13.6 20.7 13.2 21.2 12.6 21.2ZM16.7 19.9C16.4 19.9 16 19.7 15.8 19.4L15.2 18.5C14.9 18 15.1 17.4 15.6 17.1C16.1 16.8 16.7 17 17 17.5L17.6 18.4C17.9 18.9 17.7 19.5 17.2 19.8C17 19.9 16.8 19.9 16.7 19.9ZM19.4 17C19.2 17 19.1 17 18.9 16.9L18.2 16.5C17.7 16.2 17.6 15.6 17.8 15.1C18.1 14.6 18.7 14.5 19.2 14.7L19.9 15.1C20.4 15.4 20.5 16 20.3 16.5C20.1 16.8 19.8 17 19.4 17ZM20.4 13H19.9C19.3 13 18.9 12.6 18.9 12C18.9 11.4 19.3 11 19.9 11H20.4C21 11 21.4 11.4 21.4 12C21.4 12.6 20.9 13 20.4 13ZM18.9 9.30005C18.6 9.30005 18.2 9.10005 18 8.80005C17.7 8.30005 17.9 7.70002 18.4 7.40002L18.6 7.30005C19.1 7.00005 19.7 7.19995 20 7.69995C20.3 8.19995 20.1 8.79998 19.6 9.09998L19.4 9.19995C19.3 9.19995 19.1 9.30005 18.9 9.30005Z" fill="black"/>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Footer Bölümü</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.footer-social.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.footer-social.*") ? "active" : "" }}" href="{{ route("admin.footer-social.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sosyal Medya Linkleri</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.footer-info.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.footer-info.*") ? "active" : "" }}" href="{{ route("admin.footer-info.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Footer Bilgiler</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.footer-contact-info.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.footer-contact-info.*") ? "active" : "" }}" href="{{ route("admin.footer-contact-info.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">İletişim Bilgiler</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.footer-useful-links.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.footer-useful-links.*") ? "active" : "" }}" href="{{ route("admin.footer-useful-links.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kullanışlı Linkler</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion {{ Route::is("admin.footer-help-links.*") ? "menu-active-bg show" : "" }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is("admin.footer-help-links.*") ? "active" : "" }}" href="{{ route("admin.footer-help-links.index") }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Yardım Linkleri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--! SETTINGS LINK -->
                <div class="menu-item">
                    <a class="menu-link {{ Route::is("admin.settings.index") || Route::is("admin.general-settings.*") || Route::is("admin.seo-settings.*") ? "active" : "" }}" href="{{ route("admin.settings.index") }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black"/>
                                    <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Ayarlar</span>
                    </a>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
