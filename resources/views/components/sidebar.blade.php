<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ url('/') }}/public/custom-image/mcc-logo.png" class="h-45px logo" />
            {{-- <strong style="color:white;font-size:22px;">{{ config('app.name', 'Laravel') }}</strong> --}}
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

    <!-- Imp  -->
    @php
    $roles = Auth::user()->role;
    $route = explode('/', Request::path());
    if (!isset($route[0])) {
    $route[0] = '';
    }
    @endphp

    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo" , data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">User Profile</span>
                    </div>
                </div>

                <div class="menu-item ">
                    <a class="menu-link @if ($route[0] == 'users') active @endif" href="{{ route('users.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">BackEnd User</span>
                    </a>
                </div>
                <div class="menu-item ">
                    <a class="menu-link @if ($route[0] == 'role-permission') active @endif" href="{{ route('role-permission.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person-lines-fill fs-2"></i>

                        </span>
                        <span class="menu-title">Role Permission</span>
                    </a>
                </div>
                <div class="menu-item ">
                    <a class="menu-link @if ($route[0] == 'permission-listing') active @endif" href="{{ route('permission-listing.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-link fs-2"></i>
                        </span>
                        <span class="menu-title">Permissions</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Setting Modules</span>
                    </div>
                </div>


                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mt-3 @if ( $route[0] == 'footer' || $route[0] == 'header') hover show @endif">

                    <span class="menu-link">
                        <span class="menu-icon"> <i class="bi bi-house fs-3"></i> </span>
                        <span class="menu-title">Setting Module</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion menu-active-bg    @if ( $route[0] == 'header' || $route[0] == 'header') show @endif">
                        <div class="menu-item">
                            <a class="menu-link @if ($route[0] == 'header') active @endif" href="{{ route('header.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-gear-fill fs-4"></i>
                                </span>
                                <span class="menu-title">Header Settings</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg    @if ( $route[0] == 'footer' || $route[0] == 'header') show @endif">
                        <div class="menu-item">
                            <a class="menu-link @if ($route[0] == 'footer') active @endif" href="{{ route('footer.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-gear-fill fs-4"></i>
                                </span>
                                <span class="menu-title">Footer Settings</span>
                            </a>
                        </div>
                    </div>



                </div>

                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1"> Pages </span>
                    </div>
                </div>
                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'home') active @endif" href="{{ route('home.edit',1) }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Home Page</span>
                    </a>
                </div>
                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'about') active @endif" href="{{ route('about.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">About Us Page</span>
                    </a>
                </div>
                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'certification') active @endif" href="{{ route('certification.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Certification Page</span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'assesment') active @endif" href="{{ route('assesment.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Assesment Page</span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'jobs') active @endif" href="{{ route('jobs.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Jobs Page</span>
                    </a>
                </div>


                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1"> CMS Modules</span>
                    </div>
                </div>
                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'jobseekers') active @endif" href="{{ route('jobseekers.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Job Seekers</span>
                    </a>
                </div>
                <div class="menu-item ">
                    <a class="menu-link  @if ($route[0] == 'tips') active @endif" href="{{ route('tips.index') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person fs-2"></i>
                        </span>
                        <span class="menu-title">Insights and Tips</span>
                    </a>
                </div>
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Aside Menu-->
    </div>
</div>
