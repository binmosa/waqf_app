@extends('base.base')

@section('content')

    <!--begin::Main-->
    @if (theme()->getOption('layout', 'main/type') === 'blank')
        <div class="d-flex flex-column flex-root">
            {{ $slot }}
        </div>
    @else
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                {{ theme()->getView('layout/aside/_base') }}

                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    {{ theme()->getView('layout/header/_base') }}

                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        {{ theme()->getView('layout/_content', compact('slot')) }}
                    </div>
                    <!--end::Content-->

                    {{ theme()->getView('layout/_footer') }}
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->




        @if (theme()->getOption('layout', 'scrolltop/display') === true)
            {{ theme()->getView('layout/_scrolltop') }}
        @endif
    @endif
    <!--end::Main-->

    @if (session()->get('logout_from_admin'))

        <!--begin::Alert-->
        <div class="alert alert-danger d-flex align-items-center p-5 position-lg-sticky align-content-lg-center" style="bottom: 20px; right:20px; z-index:99999999">
            <!--begin::Icon-->
            <i class="ki-duotone ki-shield-tick fs-4 text-success me-4"><span class="path1"></span><span class="path2"></span></i>
            <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex align-content-lg-center">
                <!--begin::Title-->
                <h4 class="mb-1 text-dark fs-6 ml-3">تحذير: انت تتصفح حساب مسبتخدم آخر بناء على صلاحيتك .. سيتم حفظ أي تعديلات تقوم بها في حساب المستخدم </h4>
                <!--end::Title-->
                <div class="spacer-5">  </div>


            </div>
            <!--end::Wrapper-->
            <!--begin::Content-->

            <a href="{{ route('admin.login.back') }}" class="bg-danger text-white d-block py-1 px-4 rounded-1 fw-bold"
               style="font-size: 1.2rem">
                الرجوع للحساب الإداري
            </a>

            <!--end::Content-->
        </div>
        <!--end::Alert-->


{{--        <div class="position-fixed" style="bottom: 20px; right:20px; z-index:99999999">--}}
{{--            <a href="{{ route('admin.login.back') }}" class="bg-danger text-white d-block py-1 px-4 rounded-1 fw-bold"--}}
{{--                style="font-size: 1.2rem">--}}
{{--                الادارة--}}
{{--            </a>--}}
{{--        </div>--}}
    @endif
@endsection
