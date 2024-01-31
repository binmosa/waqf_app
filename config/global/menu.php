<?php

/*
 * Quick info regarding dynamic menu system :
 * Title will display in the menu item text and the path will be the link.
 * The path will be registered in Laravel route.
 * Each menu item added here must be paired with a page config in config/global/pages.
 * Alkhirat Update:
 * The menu system has been updated to be easier, using the route. However, for the breadcrumb showing on the system,
 * use the this menu array to set the path, and use (config/global/pages.php) file to show the page title accordingly.
 */
return array(

    // Main menu arrays
    'main'          => array(

        //// الصفحة الرئيسية
        // اعدادات الحسابات
        array(
            'title' => 'الرئيسية',
            'path'  => '/',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/art/art002.svg", "svg-icon-2"),


            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(

                    array(
                        'title'  => 'ملخص الحساب',
                        'path'   => 'account/settings/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'تعديل المعلومات الشخصية',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),

        ),






        //// حساب المستفيد
        array(
            'title'      => 'حساب المستفيد',
            'path'      => 'beneficiary',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com008.svg", "svg-icon-2 svg-icon-info"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(

                    array(
                        'title'  => 'تعديل المعلومات الشخصية',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'ملخص الحساب',
                        'path'   => 'account/settings/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'المهارات',
                        'path'   => 'account/settings/skills',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'الشهادات',
                        'path'   => 'account/settings/certificates',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'الاحتياجات',
                        'path'   => 'account/settings/necessities',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'الخبرات المهنية ',
                        'path'   => 'account/settings/experiences',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'بيانات المستفيد',
                        'path'   => 'account/settings/beneficiarie',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'قائمة الخدمات',
                        'path'   => 'account/services',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),



                ),
            ),
        ),










        // حساب الداعم
        array(
            'title'      => 'حساب الداعم',
            'path'      => 'supporter',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com008.svg", "svg-icon-2 svg-icon-info"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => ' بيانات الداعم',
                        'path'   => 'account/settings/supporter',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),


                    array(
                        'title'  => ' تأثيرات الداعم',
                        'path'   => 'account/settings/supporter/influences',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),



                    array(
                        'title'  => 'حقوق وواجبات الداعم',
                        'path'   => 'supporter/rightsDuties',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'سجل المساهمات',
                        'path'   => 'supporter/payments',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'العضوية',
                        'path'   => 'supporter/membershiptypes',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'التواصل مع الإدارة',
                        'path'   => 'supporter/suggestions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),


                    array(
                        'title'  => 'شراء تكاليف سلع الخدمات',
                        'path'   => 'supporter/contributions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),


        // المتطوعين
        array(
            'title'      => 'المتطوعين',
            'path'      => 'volunteer',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(

                    array(
                        'title'  => 'سجل المتطوع',
                        'path'   => 'volunteer/volunteerLogs',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),



        //// حساب الإدارة
        array(
            'title'      => 'حساب الإدارة',
            'path'      => 'admin',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com008.svg", "svg-icon-2 svg-icon-info"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(

                    array(
                        'title'  => 'إدارة المستخدمين',
                        'path'   => 'admin/users',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إدارة المستفيدين',
                        'path'   => 'admin/beneficiaries',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إدارة الداعمين',
                        'path'   => 'admin/supporters',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إدارة المتطوعين',
                        'path'   => 'admin/volunteers',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'الخدمات',
                        'path'   => 'admin/services',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'المشاريع',
                        'path'   => 'admin/projects',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'الأنشطة',
                        'path'   => 'admin/activities',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'المساهمات',
                        'path'   => 'admin/payments',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'مقترحات الداعمين',
                        'path'   => 'admin/suggestions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إدارة الأحياء والمدن',
                        'path'   => 'admin/districts',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إدارة أنواع التأثير',
                        'path'   => 'admin/influenceTypes',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),


                    array(
                        'title'  => 'إدارة المنظات',
                        'path'   => 'admin/organizations',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'إدارة نوع المساهمة',
                        'path'   => 'admin/contrib',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'إدارة طرق الدفع',
                        'path'   => 'admin/payment-methods',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                    array(
                        'title'  => 'إدارة نوع الخدمات',
                        'path'   => 'admin/service-types',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),


                ),
            ),
        ),





        ////  إدارة النظام
        array(
            'title'      => 'إدارة النظام',
            'path'      => 'log',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com008.svg", "svg-icon-2 svg-icon-info"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(

                    array(
                        'title'  => 'سجل عمليات المستخدمين',
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'سجل عمليات النظام',
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),


        // //// فاصل
        // array(
        //     'classes' => array('content' => 'pt-2 pb-2'),
        //     'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>',
        // ),


        // // المستفيدون
        // array(
        //     'title'      => 'المستفيدون',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'  => 'المستفيدون',
        //                 'path'   => 'beneficiaries/index',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'تعديل المعلومات الشخصية',
        //                 'path'   => 'account/settings',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'      => 'Security',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //         ),
        //     ),
        // ),







        // // الخدمات
        // array(
        //     'title'      => 'الخدمات',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'  => 'الخدمات',
        //                 'path'   => 'services',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'Settings',
        //                 'path'   => 'account/settings',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'      => 'Security',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //         ),
        //     ),
        // ),


        // //// فاصل
        // array(
        //     'classes' => array('content' => 'pt-2 pb-2'),
        //     'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>',
        // ),





        // // التقارير
        // array(
        //     'title'      => 'التقارير الإدارية',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'  => 'Overview',
        //                 'path'   => 'account/overview',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'Settings',
        //                 'path'   => 'account/settings',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'      => 'Security',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //         ),
        //     ),
        // ),


        // //// فاصل
        // array(
        //     'classes' => array('content' => 'pt-2 pb-2'),
        //     'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>',
        // ),


        // // إدارة النظام
        // array(
        //     'title'      => 'إدارة النظام',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-layers fs-3"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'      => 'Settings',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //             array(
        //                 'title'  => 'Audit Log',
        //                 'path'   => 'log/audit',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'System Log',
        //                 'path'   => 'log/system',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //         ),
        //     ),
        // ),

        // // فاصل
        // array(
        //     'content' => '<div class="separator mx-1 my-4"></div>',
        // ),

        // // Changelog متابعة إصدارات النظام
        // array(
        //     'title' => 'إصدار النظام v'.theme()->getVersion(),
        //     'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
        //     'path'  => 'documentation/getting-started/changelog',
        // ),
    ),


    // // Horizontal menu
    // 'horizontal'    => array(
    //     // Dashboard
    //     array(
    //         'title'   => 'Dashboard',
    //         'path'    => '',
    //         'classes' => array('item' => 'me-lg-1'),
    //     ),

    //     // Resources
    //     array(
    //         'title'      => 'Resources',
    //         'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
    //         'attributes' => array(
    //             'data-kt-menu-trigger'   => "click",
    //             'data-kt-menu-placement' => "bottom-start",
    //         ),
    //         'sub'        => array(
    //             'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
    //             'items' => array(
    //                 // Documentation
    //                 array(
    //                     'title' => 'Documentation',
    //                     'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/abstract/abs027.svg", "svg-icon-2"),
    //                     'path'  => 'documentation/getting-started/overview',
    //                 ),

    //                 // Changelog
    //                 array(
    //                     'title' => 'Changelog v'.theme()->getVersion(),
    //                     'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
    //                     'path'  => 'documentation/getting-started/changelog',
    //                 ),
    //             ),
    //         ),
    //     ),

    //     // Account
    //     array(
    //         'title'      => 'Account',
    //         'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
    //         'attributes' => array(
    //             'data-kt-menu-trigger'   => "click",
    //             'data-kt-menu-placement' => "bottom-start",
    //         ),
    //         'sub'        => array(
    //             'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
    //             'items' => array(
    //                 array(
    //                     'title'  => 'Overview',
    //                     'path'   => 'account/overview',
    //                     'bullet' => '<span class="bullet bullet-dot"></span>',
    //                 ),
    //                 array(
    //                     'title'  => 'Settings',
    //                     'path'   => 'account/settings',
    //                     'bullet' => '<span class="bullet bullet-dot"></span>',
    //                 ),
    //                 array(
    //                     'title'      => 'Security',
    //                     'path'       => '#',
    //                     'bullet'     => '<span class="bullet bullet-dot"></span>',
    //                     'attributes' => array(
    //                         'link' => array(
    //                             "title"             => "Coming soon",
    //                             "data-bs-toggle"    => "tooltip",
    //                             "data-bs-trigger"   => "hover",
    //                             "data-bs-dismiss"   => "click",
    //                             "data-bs-placement" => "right",
    //                         ),
    //                     ),
    //                 ),
    //             ),
    //         ),
    //     ),

    //     // System
    //     array(
    //         'title'      => 'System',
    //         'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
    //         'attributes' => array(
    //             'data-kt-menu-trigger'   => "click",
    //             'data-kt-menu-placement' => "bottom-start",
    //         ),
    //         'sub'        => array(
    //             'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
    //             'items' => array(
    //                 array(
    //                     'title'      => 'Settings',
    //                     'path'       => '#',
    //                     'bullet'     => '<span class="bullet bullet-dot"></span>',
    //                     'attributes' => array(
    //                         'link' => array(
    //                             "title"             => "Coming soon",
    //                             "data-bs-toggle"    => "tooltip",
    //                             "data-bs-trigger"   => "hover",
    //                             "data-bs-dismiss"   => "click",
    //                             "data-bs-placement" => "right",
    //                         ),
    //                     ),
    //                 ),
    //                 array(
    //                     'title'  => 'Audit Log',
    //                     'path'   => 'log/audit',
    //                     'bullet' => '<span class="bullet bullet-dot"></span>',
    //                 ),
    //                 array(
    //                     'title'  => 'System Log',
    //                     'path'   => 'log/system',
    //                     'bullet' => '<span class="bullet bullet-dot"></span>',
    //                 ),
    //             ),
    //         ),
    //     ),
    // ),

);
