<!--begin::Toolbar-->
<div  class="{{ theme()->printHtmlClasses('header-container', false) }} py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">

    {{ theme()->getView('layout/_page-title')}}

    <!--begin::Action group-->
    <div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0" data-kt-drawer-toggle="#kt_aside_mobile_toggle">

{{--        <!--begin::Action wrapper-->--}}
{{--        <div class="d-flex align-items-center">--}}

{{--            <!--begin::Separartor-->--}}
{{--            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>--}}
{{--            <!--end::Separartor-->--}}
{{--        </div>--}}
{{--        <!--end::Action wrapper-->--}}



        <!--begin::Action wrapper-->
        <div class="d-none d-lg-block d-xl-block">

{{--            <!--begin::Label-->--}}
{{--            <span class="fs-8 text-gray-700  pe-3 d-none d-xxl-block">تسجيل الخروج</span>--}}
{{--            <!--end::Label-->--}}

            <!--begin::Actions-->

                <!--begin::Action-->
                <form class="form inline" method="POST"   action="{{ route('logout') }}" >
                @csrf
                @method('POST')
                <button type="submit" title="تسجيل الخروج" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary fc-media-screen" >
                    {!! theme()->getSvgIcon("icons/duotune/general/gen049.svg", "svg-icon-1") !!}
                </button>
                </form>
                <!--end::Action-->

            <!--end::Actions-->


        </div>
        <!--end::Action wrapper-->



    </div>
    <!--end::Action group-->
</div>
<!--end::Toolbar-->
















