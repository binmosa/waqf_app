
<!--begin::Tables Widget 5-->
<div class="card">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">أنشطة الوقف</span>
        </h3>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3 border-0 table-responsive" style="height: 300px;">

                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-responsive-lg table-row-dashed table-row-gray-200 align-middle gs-0 gy-4" >
                            <!--begin::Table head-->
                            <thead>
                                <tr>
                                    <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>

                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt=""/>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">data2</a>
                                            <span class="text-muted fw-bold d-block">data1</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">
                                          data 3
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-success">datax</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                {!! theme()->getSvgIcon("icons/duotune/arrows/arr064.svg", "svg-icon-2"); !!}
                                            </a>
                                        </td>
                                    </tr>



                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Tables Widget 5-->
