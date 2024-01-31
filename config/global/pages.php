<?php
/*
 *
 */

return array(


    // Pages are arranged based on account level or general




    //#################################################
    //1. General Pages (Auth, Registeration, Login .. etc)
    //################################################

    'login'           => array(
        'title'  => 'تسجيل الدخول',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-in/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'register'        => array(
        'title'  => 'تسجيل مستخدم جديد',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-up/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'forgot-password' => array(
        'title'  => 'نسيت الرقم السري',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/password-reset/password-reset.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),


    //#################################################
    //2. Users Pages ( Benefeicary, Supporter)
    //################################################


    'account' => array(
        'overview' => array(
            'title'  => 'معلومات المستخدم',
            'view'   => 'account/overview/overview',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),


        'services' => array(
            'title'  => 'قائمة الخدمات',
            'view'   => 'account/settings/services',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),


        // setting for beneficiary
        'settings' => array(

            'beneficiarie' => array(
                'title'  => 'بيانات المستفيد',
                'view'   => 'account/settings/beneficiarie',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),




            'overview' => array(
                'title'  => 'المعلومات الشخصية',
                'view'   => 'account/settings/overview',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'skills' => array(
                'title'  => 'المهارات',
                'view'   => 'account/settings/skills',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'certificates' => array(
                'title'  => 'الشهادات',
                'view'   => 'account/settings/certificates',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'necessities' => array(
                'title'  => 'الاحتياجات',
                'view'   => 'account/settings/necessities',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'experiences' => array(
                'title'  => 'الخبرات المهنية',
                'view'   => 'account/settings/experiences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),

            'title'  => 'تعديل المعلومات الشخصية',
            'assets' => array(

                'custom' => array(
                    'js' => array(
                        'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                        'js/custom/modals/two-factor-authentication.js',
                        '../../../app.js'
                    ),
                ),

            ),






            'supporter' => array(
                'title'  => 'بيانات الداعم',
                'view'   => 'account/settings/supporter',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),




            'influences' => array(
                'title'  => 'تأثيرات الداعم',
                'view'   => 'account/settings/supporter/influences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),




        ),


    ),





    // Volunteer pages
    'volunteer' => array(
        'volunteerLogs' => array(
            'title'  => 'سجل الخدمات التطوعية',
            'view'   => 'volunteer/volunteerLogs',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

    ),



    // ===========================================


    // supporters pages
    'supporter' => array(
        'rightsDuties' => array(
            'title'  => 'حقوق وواجبات الداعم',
            'view'   => 'supporter/rightsDuties',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),


        'contributions' => array(
            'title'  => 'المساهمة في تكاليف الخدمات',
            'view'   => 'supporter/contributions',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'payments' => array(
            'title'  => 'سجل المساهمات',
            'view'   => 'supporter/payments',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

        'membershiptypes' => array(
            'title'  => 'العضوية',
            'view'   => 'supporter/membershiptypes',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

        'suggestions' => array(
            'title'  => 'التواصل مع الإدارة',
            'view'   => 'supporter/suggestions',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),


        'suggestion' => array(
            'title'  => 'اقتراح جديد',
            'view'   => 'supporter/suggestion',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),


        'suggestionsSent' => array(
            'title'  => 'الرسائل المرسلة للإدارة',
            'view'   => 'supporter/suggestionsSent',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),









    ),






    //#################################################
    //3. Admin Pages Titles
    //################################################


    // Admin menus array:
    'admin' => array(

        //  beneficiaries list for admin
        'beneficiaries' => array(
            'title'  => 'إدارة المستفيدين',
        ),



        //  supporters list for admin
        'supporters' => array(
            'title'  => 'إدارة الداعمين',
        ),


        //  volunteers list for admin
        'volunteers' => array(
            'title'  => 'إدارة المتطوعين',
        ),


        //  services list for admin
        'services' => array(
            'title'  => 'إدارة الخدمات',
        ),

        // suggestions list for admin
        'suggestions' => array(
            'title'  => 'إدارة التواصل مع الداعمين',
        ),


        //  users list for admin
        'users' => array(
            'title'  => 'إدارة المستخدمين',
            '*' => array(
                'title' => 'إدارة المستخدمين'
            ),

        ),



        //  districts list for admin
        'districts' => array(
            'title'  => 'إدارة الأحياء والمدن',
        ),


        //  districts list for admin
        'influenceTypes' => array(
            'title'  => 'إدارة أنواع التأثير',
        ),

        //  projects list for admin
        'projects' => array(
            'title'  => 'إدارة المشاريع',
        ),

        //  activities list for admin
        'activities' => array(
            'title'  => 'إدارة الأنشطة',
        ),

        //  organizations list for admin
        'organizations' => array(
            'title'  => 'إدارة المنظمات',
        ),

        //  contrib list for admin
        'contrib' => array(
            'title'  => 'إدارة نوع المساهمة',
        ),

        //  payment-methods list for admin
        'payment-methods' => array(
            'title'  => 'إدارة طرق الدفع',
        ),

        //  payment list for admin
        'payments' => array(
            'title'  => 'إدارة المدفوعات',
        ),

        //  service-types list for admin
        'service-types' => array(
            'title'  => 'إدارة نوع الخدمات',
        ),








    ), // end of Admin menus array



    //  Users logs and System logs for admin
    'log' => array(
        'audit'  => array(
            'title'  => 'سجل عمليات المستحدمين',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'system' => array(
            'title'  => 'سجل عمليات النظام',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
    ),












    //  Send message to admin as suggestions:
    'users'         => array(
        'title' => 'مستخدمو النظام',

        '*' => array(
            'title' => 'قائمة المستخدمين',

            'edit' => array(
                'title' => 'Edit User',
            ),
        ),
    ),





);
