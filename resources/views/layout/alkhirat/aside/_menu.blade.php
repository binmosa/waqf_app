<!--begin::Aside Menu-->
@php
    $menu = bootstrap()->getAsideMenu();
    \App\Core\Adapters\Menu::filterMenuPermissions($menu->items);
@endphp

<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
    data-kt-scroll-height="auto"
    data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
    data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">



    <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
        data-kt-menu-expand="false">




        <!--  الرئيسية  -->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link--><a class="menu-link" href="/"><span
                    class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="9" height="9" rx="2"
                            fill="currentColor"></rect>
                        <rect opacity="0.3" x="13" y="2" width="9" height="9"
                            rx="2" fill="currentColor"></rect>
                        <rect opacity="0.3" x="13" y="13" width="9" height="9"
                            rx="2" fill="currentColor"></rect>
                        <rect opacity="0.3" x="2" y="13" width="9" height="9"
                            rx="2" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">الرئيسية</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--  نهاية الرئيسية  -->




        <!--  المستفيدون  -->
        @hasrole('beneficiary')
        <!--begin:Menu item-->
{{--        <div class="menu-item pt-5">--}}
{{--            <!--begin:Menu content-->--}}
{{--            <div class="menu-content"><span class="menu-heading text-white fw-bold text-uppercase fs-7">حساب المستفيد</span></div>--}}
{{--            <!--end:Menu content-->--}}
{{--        </div>--}}
        <!--end:Menu item-->

        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">قائمة حساب المستفيد</span><span class="menu-arrow"></span></span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--> <a class="menu-link  {{ request()->is('account/settings/overview') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/overview') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">ملخص الحساب</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('account/settings') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('account/settings') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تعديل المعلومات الشخصية</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link  {{ request()->is('account/settings/beneficiarie') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/beneficiarie') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">بيانات المستفيد</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--> <a class="menu-link  {{ request()->is('account/settings/skills') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/skills') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">المهارات</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--> <a class="menu-link  {{ request()->is('account/settings/certificates') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/certificates') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">الشهادات</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--> <a class="menu-link  {{ request()->is('account/settings/necessities') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/necessities') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">الاحتياجات</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                    <!--begin:Menu link-->  <a class="menu-link  {{ request()->is('account/settings/experiences') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/settings/experiences') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">الخبرات المهنية</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div class="menu-item">
                    <!--begin:Menu link-->  <a class="menu-link  {{ request()->is('account/services') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('account/services') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title"> قائمة الخدمات</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        @endhasrole
        <!--  نهاية المستفيدون  -->









        <!-- الداعمون  -->
        @hasrole('supporter')

{{--        <!--begin:Menu item-->--}}
{{--        <div class="menu-item pt-5">--}}
{{--            <!--begin:Menu content-->--}}
{{--            <div class="menu-content"><span class="menu-heading fw-bold text-white text-uppercase fs-7">الداعمون</span></div>--}}
{{--            <!--end:Menu content-->--}}
{{--        </div>--}}
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">صفحتي الشخصية</span><span class="menu-arrow"></span></span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('account/settings/overview') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('account/settings/overview') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">ملخص الحساب</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('account/settings') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('account/settings') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المعلومات الشخصية</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('account/settings/supporter') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('account/settings/supporter') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">بيانات الداعم</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                @hasrole('admin|superadmin')
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('account/settings/supporter/influences') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('account/settings/supporter/influences') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تأثيرات الداعم</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                @endrole
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('supporter/payments') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('supporter/payments') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">سجل المساهمات</span>
                    </a>
                     <!--end:Menu link-->
                </div>
                <!--end:Menu item-->





{{--                <!--begin:Menu item-->--}}
{{--                <div class="menu-item">--}}
{{--                    <!--begin:Menu link-->--}}
{{--                    <a class="menu-link  {{ request()->is('supporter/contributions') ? 'active' : '' }}"--}}
{{--                        href="{{ theme()->getPageUrl('supporter/contributions') }}">--}}
{{--                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>--}}
{{--                        <span class="menu-title">شراء تكاليف سلع الخدمات</span>--}}
{{--                    </a>--}}
{{--                    <!--end:Menu link-->--}}
{{--                </div>--}}
{{--                <!--end:Menu item-->--}}





                <!--begin:Menu item-->
                <div class="menu-item">

                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('supporter/membershiptypes') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('supporter/membershiptypes') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">فئة العضوية</span>
                    </a>
                   <!--end:Menu link-->
                </div>
                <!--end:Menu item-->




                 <!--begin:Menu item-->
                 <div class="menu-item">
                    <!--begin:Menu link-->
                    <a data-bs-toggle="tooltip"
                    class="menu-link  {{ request()->is('supporter/suggestions') ? 'active' : '' }}"
                    href="{{ theme()->getPageUrl('supporter/suggestions') }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">التواصل مع الإدارة</span>
                     </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

{{--                <!--begin:Menu item-->--}}
{{--                <div class="menu-item">--}}
{{--                    <!--begin:Menu link-->--}}
{{--                    <a data-bs-toggle="tooltip"--}}
{{--                       class="menu-link  {{ request()->is('supporter/suggestion') ? 'active' : '' }}"--}}
{{--                       href="{{ theme()->getPageUrl('supporter/suggestion') }}">--}}
{{--                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>--}}
{{--                        <span class="menu-title">مراسلة الإدارة</span>--}}
{{--                    </a>--}}
{{--                    <!--end:Menu link-->--}}
{{--                </div>--}}
{{--                <!--end:Menu item-->--}}

                 <!--begin:Menu item-->
                 <div class="menu-item">
                    <!--begin:Menu link-->
                    <a data-bs-toggle="tooltip"
                            class="menu-link  {{ request()->is('supporter/suggestionsSent') ? 'active' : '' }}"
                            href="{{ theme()->getPageUrl('supporter/suggestionsSent') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">الرسائل المرسلة</span>
                        </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a data-bs-toggle="tooltip"
                    <a class="menu-link  {{ request()->is('supporter/rightsDuties') ? 'active' : '' }}"
                       href="{{ theme()->getPageUrl('supporter.rightsDuties') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">حقوق وواجبات الداعم</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
ر

            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        @endhasrole
        <!-- نهاية الداعمون -->




        <!-- المتطوعون -->
        @hasrole('volunteer')


        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ theme()->getPageUrl('volunteer/volunteerLogs') }}"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    {!! theme()->getSvgIcon("icons/duotune/files/fil001.svg", "svg-icon-1") !!}
                    <!--end::Svg Icon-->
                </span><span class="menu-title">السجل التطوعي</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->



        @endhasrole
        <!--  نهاية المتطوعون  -->




        <!-- الإدارة -->
        @hasanyrole('admin')

        <!--begin:Menu item-->
        <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content"><span class="menu-heading fw-bold text-uppercase text-white fs-7">إدارة الوقف</span></div>
            <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/layouts/lay008.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M20 21H11C10.4 21 10 20.6 10 20V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">المستخدمون</span><span class="menu-arrow"></span></span>
            <!--end:Menu link-->





            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">

                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/users') ? 'active' : '' }}"
                       href="{{ theme()->getPageUrl('admin/users') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة المستخدمين </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('admin/beneficiaries') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/beneficiaries') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة المستفيدين</span>
                    </a>

                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('admin/supporters') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/supporters') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة الداعمين</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('admin/volunteers') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/volunteers') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة المتطوعين</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->


        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/text/txt002.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 11H7C6.4 11 6 10.6 6 10V9C6 8.4 6.4 8 7 8H17C17.6 8 18 8.4 18 9V10C18 10.6 17.6 11 17 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM18 20V19C18 18.4 17.6 18 17 18H7C6.4 18 6 18.4 6 19V20C6 20.6 6.4 21 7 21H17C17.6 21 18 20.6 18 20Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">إدارة الخدمات</span><span class="menu-arrow"></span></span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('admin/services') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/services') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title"> الخدمات</span>
                    </a> <!--end:Menu link-->
                </div>
                <!--end:Menu item-->



                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/projects') ? 'active' : '' }}"
                       href="{{ theme()->getPageUrl('admin/projects') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المشاريع</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->




                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/activities') ? 'active' : '' }}"
                       href="{{ theme()->getPageUrl('admin/activities') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">الأنشطة</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/payments') ? 'active' : '' }}"
                       href="{{ theme()->getPageUrl('admin/payments') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المدفوعات </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('admin/suggestion*') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/suggestions') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">مقترحات الداعمين</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->



        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/text/txt002.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 11H7C6.4 11 6 10.6 6 10V9C6 8.4 6.4 8 7 8H17C17.6 8 18 8.4 18 9V10C18 10.6 17.6 11 17 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM18 20V19C18 18.4 17.6 18 17 18H7C6.4 18 6 18.4 6 19V20C6 20.6 6.4 21 7 21H17C17.6 21 18 20.6 18 20Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">أدوات النظام</span><span class="menu-arrow"></span></span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/districts') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/districts') }}" data-bs-toggle="tooltip"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                        data-kt-initialized="1">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">الأحياء و المدن</span>
                    </a> <!--end:Menu link-->
                </div>
                <!--end:Menu item-->



                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/influenceTypes') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/influenceTypes') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">أنواع التأثير</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->





                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/organizations') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/organizations') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المنظمات</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->



                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/contrib') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/contrib') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">نوع المساهمة</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->







                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/payment-methods') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/payment-methods') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">طرق الدفع </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->





                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ request()->is('admin/service-types') ? 'active' : '' }}"
                        href="{{ theme()->getPageUrl('admin/service-types') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">نوع الخدمات </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->



            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        @endhasrole
        <!-- نهاية إدارة الوقف -->





        <!-- إدارة النظام -->
        @hasanyrole('admin')

        <!--begin:Menu item-->
        <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content"><span class="menu-heading fw-bold text-uppercase text-white fs-7">إدارة النظام</span></div>
            <!--end:Menu content-->
        </div>
        <!--end:Menu item-->




        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link"
                href="{{ theme()->getPageUrl('log/audit') }}"><span
                    class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                fill="currentColor"></path>
                            <path
                                d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">سجل عمليات المستخدمين</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->



        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link"
                href="{{ theme()->getPageUrl('log/system') }}"><span
                    class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                fill="currentColor"></path>
                            <path
                                d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">سجل عمليات النظام</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->








{{--        <!--begin:Menu item-->--}}
{{--        <div class="menu-item">--}}
{{--            <!--begin:Menu link--><a class="menu-link"--}}
{{--                href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank"><span--}}
{{--                    class="menu-icon">--}}
{{--                    <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->--}}
{{--                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"--}}
{{--                            fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path opacity="0.3"--}}
{{--                                d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"--}}
{{--                                fill="currentColor"></path>--}}
{{--                            <path--}}
{{--                                d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"--}}
{{--                                fill="currentColor"></path>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <!--end::Svg Icon-->--}}
{{--                </span><span class="menu-title">إصدارات النظام</span></a>--}}
{{--            <!--end:Menu link-->--}}
{{--        </div>--}}
{{--        <!--end:Menu item-->--}}



        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link--><a class="menu-link" href="https://www.dropbox.com/scl/fo/ozq0w4965e134kczdibt1/h?rlkey=fzy8apvolhtjjgf3rivzbfnvy&dl=0"
                target="_blank"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                fill="currentColor"></path>
                            <path
                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span><span class="menu-title">توثيق النظام</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->


{{--        <!--begin:Menu item-->--}}
{{--        <div class="menu-item">--}}
{{--            <!--begin:Menu link--><a class="menu-link"--}}
{{--                href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"--}}
{{--                target="_blank"><span class="menu-icon">--}}
{{--                    <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->--}}
{{--                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"--}}
{{--                            fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z"--}}
{{--                                fill="currentColor"></path>--}}
{{--                            <path opacity="0.3"--}}
{{--                                d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z"--}}
{{--                                fill="currentColor"></path>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <!--end::Svg Icon-->--}}
{{--                </span><span class="menu-title">ملف تحديثات النظام</span></a>--}}
{{--            <!--end:Menu link-->--}}
{{--        </div>--}}
{{--        <!--end:Menu item-->--}}

        @endhasrole
        <!-- نهاية إدارة النظام -->




        <!--begin:Menu item-->
        <div class="menu-item">
            <form id="form-log-out" class="hidden" action="{{route('logout')}}" method="POST">@csrf</form>

            <!--begin:Menu link--><a class="menu-link" href="javascript:void(0)" onclick="$('#form-log-out').submit()"><span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2">
                         {!! theme()->getSvgIcon("icons/duotune/arrows/arr024.svg", "svg-icon-1") !!}
                    </span>
                    <!--end::Svg Icon-->

                </span><span class="menu-title">تسجيل الخروج</span></a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->




    </div>


</div>
<!--end::Aside Menu-->
