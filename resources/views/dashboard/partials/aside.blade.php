<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        <!--begin::Aside user-->
        <!--begin::User-->
        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-50px">
                @if (auth('admin')->user()->image)
                    <img src="{{ stotage::url(auth('admin')->user()->image) }}" alt="" />
                @else
                    <img src="{{ asset('dist/assets/media/aside/person.png') }}" alt="" />
                @endif
            </div>
            <!--end::Symbol-->
            <!--begin::Wrapper-->
            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <!--begin::Section-->
                <div class="d-flex">
                    <!--begin::Info-->
                    <div class="flex-grow-1 me-2">
                        <!--begin::Username-->
                        <a
                            class="text-white text-hover-primary fs-6 fw-bold">{{ auth('admin')->user()->name }}</a>
                        <!--end::Username-->
                    </div>
                    <!--end::Info-->
                    <!--begin::User menu-->
                    <div class="me-n2">
                        <!--begin::Action-->
                        <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                        fill="black" />
                                    <path
                                        d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        @if (auth('admin')->user()->image)
                                            <img src="{{ stotage::url(auth('admin')->user()->image) }}"
                                                alt="" />
                                        @else
                                            <img src="{{ asset('dist/assets/media/aside/person.png') }}"
                                                alt="" />
                                        @endif
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                            {{ auth('admin')->user()->name }}
                                        </div>
                                        <a
                                            class="fw-bold text-muted text-hover-primary fs-7">{{ auth('admin')->user()->email }}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <!--<div class="menu-item px-5">
                                <a href="../../demo8/dist/account/overview.html" class="menu-link px-5">{{ trans('dashboard_layout.profile') }}</a>
                            </div>-->
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="{{ route('admin.change-password') }}" class="menu-link px-5">{{ trans('dashboard_layout.change_password') }}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('admin.logout') }}"
                                    class="menu-link px-5">{{ trans('dashboard_layout.logout') }}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                        <!--end::Action-->
                    </div>
                    <!--end::User menu-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::User-->
        <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/home/')) active @endif" href="{{ route('home') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/home.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.home') }}</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/slider/')) active @endif"
                        href="{{ route('slider.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/slider.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.slider') }}</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/news/')) active @endif"
                        href="{{ route('news.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/news.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.news') }}</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/program/')) active @endif"
                        href="{{ route('program.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/program.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.programs') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/achievement/')) active @endif"
                        href="{{ route('achievement.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/achievement.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.achievements') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/partner/')) active @endif"
                        href="{{ route('partner.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/partner.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.partners') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/report/')) active @endif"
                        href="{{ route('report.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/report.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.reports') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/visual-library/')) active @endif"
                        href="{{ route('visual-library.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/visual_library.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.visual_library') }}</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/contact-us/')) active @endif"
                        href="{{ route('contact-us.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/contact_us.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.contact_us') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/donation/')) active @endif"
                        href="{{ route('donation.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/donation.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.donations') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/company-request/')) active @endif"
                        href="{{ route('company-request.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/company-request.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.company-request') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/job-request/')) active @endif"
                        href="{{ route('job-request.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/job-request.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.job-request') }}</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/volunteer-request/')) active @endif"
                        href="{{ route('volunteer-request.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/volunteer-request.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.volunteer-request') }}</span>
                    </a>
                </div>

                {{-- <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
                    </div>
                </div> --}}

                <div class="separator my-2"></div>

                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <img src="{{ asset('dist/assets/media/aside/settings.png') }}"
                                    style="height: 16px; width: 16px;" />
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">{{ trans('general.settings') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/contact-info/')) active @endif"
                                href="{{ route('contact-info') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.contact_info') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/social-media/')) active @endif"
                                href="{{ route('social-media') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.social_media') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/about/')) active @endif"
                                href="{{ route('about') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.about') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/vision/')) active @endif"
                                href="{{ route('vision') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.vision') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/message/')) active @endif"
                                href="{{ route('message') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.message') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/principle/')) active @endif"
                                href="{{ route('principle') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.principle') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/dashboard/objective/')) active @endif"
                                href="{{ route('objective') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ trans('general.objective') }}</span>
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
