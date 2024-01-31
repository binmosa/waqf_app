<!--begin::List Widget 3-->
<div class="card {{ $class }} "  style="height: 385px;">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">مشاريع الوقف</span>

            <span class="text-muted mt-1 fw-bold fs-7">قائمة بالمشاريع المجدولة في النظام</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <a type="button" href="{{'admin/projects'}}" title="الانتقال لقائمة المشاريع" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                {!! theme()->getSvgIcon("icons/duotune/general/gen024.svg", "svg-icon-2") !!}
            </a>

            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-2 card-scroll">
        @foreach ($latestProjects as $row)

            <!--begin::Item-->
            <div class="d-flex align-items-center ">
                {{-- {{ util()->putIf(next($listRows), 'mb-8') }} --}}
                <!--begin::Bullet-->
                <span class="bullet bullet-vertical h-40px bg-success"></span>
                <!--end::Bullet-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid mx-5">
                    <input class="form-check-input" type="checkbox" value="" />
                </div>
                <!--end::Checkbox-->

                <!--begin::Description-->
                <div class="flex-grow-1">
                    <span   class="text-gray-800 text-hover-primary fw-bolder fs-6">{{ $row->name }} </span>

                    <span class="text-muted">
                      {{ $row->description }}
                    </span>
                </div>
                <!--end::Description-->

                <span class="badge badge-light-warning fs-8 fw-bolder">التاريخ: {{ $row->start_date->format('Y-m-d') }} </span>

            </div>
            <!--end:Item-->
            <div class="separator my-5"></div>
        @endforeach
    </div>
    <!--end::Body-->
</div>
<!--end:List Widget 3-->
