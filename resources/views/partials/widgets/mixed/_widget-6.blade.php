@php
    $chartColor = $chartColor ?? 'primary';
    $chartHeight = $chartHeight ?? '175px';
@endphp

<!--begin::Mixed Widget 6-->
<div class="card {{ $class }}">
    <!--begin::Beader-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bolder fs-3 mb-1">حساب المستفيد</span>

			<span class="text-muted fw-bold fs-7">لمحة عامة عن الحساب</span>
		</h3>

        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                {!! theme()->getSvgIcon("icons/duotune/general/gen024.svg", "svg-icon-2") !!}
            </button>
{{--            {{ theme()->getView('partials/menus/_menu-1') }}--}}
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body p-0 d-flex flex-column">
        <!--begin::Stats-->
        <div class="card-px pt-5 pb-10 flex-grow-1">


            <!--begin::Row-->
            <div class="row g-0">

                <div class="overlay mt-8">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-contain card-rounded min-h-350px" style="background-image:url('/alkhirat/media/logos/khirat_new_logo-w.png')">
                    </div>
                    <!--end::Image-->

                    <!--begin::Links-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <a href="{{'/account/settings/overview'}}" class="btn btn-primary">ملخص حسابي</a>
                    </div>
                    <!--end::Links-->
                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Stats-->

{{--        <!--begin::Chart-->--}}
{{--        <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="{{ $chartColor }}" style="height: {{ $chartHeight }}"></div>--}}
{{--        <!--end::Chart-->--}}
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 6-->
