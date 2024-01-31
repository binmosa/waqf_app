<!--begin::List Widget 4-->
<div class="card " style="height: 385px;">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">أنشطة الوقف</span>

            <span class="text-muted mt-1 fw-bold fs-7">قائمة بالأنشطة المجدولة في النظام</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <a type="button" href="{{'admin/activities'}}" title="الانتقال لقائمة الأنشطة" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                {!! theme()->getSvgIcon("icons/duotune/general/gen024.svg", "svg-icon-2") !!}
            </a>

            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body p-0 card-scroll" >


        <!--begin::Stats-->
        <div class="card-p mt-n20 position-relative card-scroll">
            <!--begin::Row-->
            <div class="row g-0">

                <!--begin::Col-->
                <div class="col rounded-2 mb-7 mt-8">


                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-responsive-lg table-row-dashed h-auto table-row-gray-200 scroll" >
                            <!--begin::Table head-->
                            <thead>
                            <tr>
                                <th>م</th>
                                <th>النشاط</th>
                                <th>الوصف</th>
                                <th>التكلفة</th>
                                <th>الكود</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                            @foreach($activities as $row)
                            <tr>
                                <td>
                                    {{$row->id}}
                                </td>
                                <td>
                                    <span>{{$row->activity_name}}</span>
                                </td>
                                <td class="text-muted ">
                                    {{$row->description}}
                                </td>
                                <td >
                                    <span class="badge badge-light-success"> {{$row->monthly_cost}}</span>
                                </td>
                                <td>
                                    {{$row->activity_code}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->


                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->

        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>
<!--end::List Widget 4-->


