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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is("admin.footer-social.*") ? "hover show" : "" }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black"></path>
                                        <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black"></path>
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
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
