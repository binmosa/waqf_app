<!--begin::Mixed Widget 2-->
<div class="card">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">إحصائيات الوقف</span>

            <span class="text-muted mt-1 fw-bold fs-7">لمحة سريعة عن أهم الاحصائيات</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <a type="button" href="#" title="الانتقال للإحصائيات" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                {!! theme()->getSvgIcon("icons/duotune/general/gen024.svg", "svg-icon-2") !!}
            </a>

            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Chart-->
        <div class="card-rounded-bottom"
            style="height:40px"></div>
        <!--end::Chart-->

        <!--begin::Stats-->
        <div class="card-p mt-n20 position-relative">
            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                    {!! theme()->getSvgIcon('icons/duotune/general/gen032.svg', 'svg-icon-3x svg-icon-warning d-block my-2') !!}
                    <a href="{{'admin/beneficiaries'}}" class="text-warning fw-bold fs-6">
                        <b>{{ $beneficiaries }}</b> المستفيدون
                    </a>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                    {!! theme()->getSvgIcon('icons/duotune/general/gen032.svg', 'svg-icon-3x svg-icon-primary d-block my-2') !!}
                    <a href="{{'admin/projects'}}" class="text-primary fw-bold fs-6">
                        <b>{{ $projects }}</b> المشاريع
                    </a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                    {!! theme()->getSvgIcon('icons/duotune/abstract/abs027.svg', 'svg-icon-3x svg-icon-danger d-block my-2') !!}
                    <a href="{{'admin/volunteers'}}" class="text-danger fw-bold fs-6 mt-2">
                        <b>{{ $volunteers }}</b> المتطوعون
                    </a>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col bg-light-success px-6 py-8 rounded-2">
                    {!! theme()->getSvgIcon('icons/duotune/communication/com010.svg', 'svg-icon-3x svg-icon-success d-block my-2') !!}
                    <a href="{{'admin/supporters'}}" class="text-success fw-bold fs-6 mt-2">
                        <b>{{ $supporters }}</b> الداعمون
                    </a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 2-->
