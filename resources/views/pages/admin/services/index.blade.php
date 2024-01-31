<x-base-layout>


    <div class="block mb-5">
        <!--begin::Add user-->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"  data-bs-target="#kt_modal_add_customer">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
            <!--end::Svg Icon-->إضافة خدمة جديدة</button>
        <!--end::Add user-->
    </div>

    <x-alert>
    </x-alert>

    <!--begin::Basic info-->
    <div class="card mb-3 mt-2">

        @if ($errors->count() > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Modal - Customers - Add-->
                <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{route('services.store')}}" id="kt_modal_add_customer_form"
                                  method="post" >
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">إضافة خدمة جديدة</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <button id="kt_modal_add_customer_close"
                                            data-dismiss="modal"
                                            class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                              transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                              transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                         data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                         data-kt-scroll-offset="300px">

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">اسم الخدمة</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" required
                                                   name="service_name" value="" />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Input-->
                                            <label class="required fs-6 fw-bold mb-2">نوع الخدمة</label>

                                            <select name="serviceType_id" aria-label="{{ __('نوع الخدمة') }}" required
                                                    data-control="select2" data-placeholder="{{ __('قم باختيار نوع الخدمة') }}"
                                                    class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر نوع الخدمة ...') }}</option>
                                                @foreach(\App\Models\ServiceType::all() as $value)
                                                    <option value="{{ $value->id}}">{{ $value->name.' - '.$value->descriptoin}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Input-->
                                            <label class="required fs-6 fw-bold mb-2">الجهة المقدمة للخدمة</label>

                                            <select name="organization_id" aria-label="{{ __('الجهة المقدمة للخدمة') }}"
                                                    data-control="select2" data-placeholder="{{ __('قم باختيار الجهة') }}" required
                                                    class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر الجهة المقدمة للخدمة ...') }}</option>
                                                @foreach(\App\Models\Organization::all() as $value)
                                                    <option value="{{ $value->id}}">{{ $value->name.' - '.$value->description}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Col-->




                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">وصف الخدمة</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                   name="service_description" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">الكمية</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control form-control-solid" placeholder=""
                                                   name="quantity" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->


                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_customer_cancel"
                                            class="btn btn-light me-3">إلغاء</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">حفظ</span>
                                        <span class="indicator-progress">الرجاء الانتظار ...
                                    <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                    <!--begin::Table head-->
                    <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                        </th>
                        <th class="min-w-200px">اسم الخدمة</th>
                        <th class=" min-w-100px">نوع الخدمة</th>
                        <th class=" min-w-70px">وصف الخدمة</th>
                        <th class=" min-w-100px">الكمية</th>
                        <th class=" min-w-100px">الجهة المقدمة</th>
                        <th class="min-w-70px">خيارات</th>
                    </tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
{{--                    <!--begin::Table row-->--}}
{{--                    @foreach($services as $key=>$value)--}}
{{--                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">--}}
{{--                        <td class="w-10px pe-2">--}}
{{--                        </td>--}}
{{--                        <td class="min-w-200px">{{ $value->service_name }}</td>--}}
{{--                        <td class="min-w-100px"><span class="badge badge-light-warning fs-8 fw-bolder">--}}
{{--                            {{ $value->serviceType->name }}</span></td>--}}
{{--                        <td class=" min-w-70px">{{ $value->description }}</td>--}}
{{--                        <td class=" min-w-100px">{{ $value->quantity }}</td>--}}
{{--                        <td class=" min-w-100px">{{ $value->organization->name }}</td>--}}
{{--                        <td class="min-w-70px">--}}
{{--                        @hasrole('superadmin')--}}
{{--                        <form method="post" class="form"--}}
{{--                                    action="{{  route('services.destroy', $value->id) }}">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <input type="hidden" value="{{ $value->id }}" name="id">--}}
{{--                                    <button class="btn btn-danger" type="submit" value="مسح">حذف</button>--}}
{{--                                </form>--}}
{{--                        @endhasrole--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
    </div>


    @section('scripts')
    <script src="{{asset('alkhirat/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script type="text/javascript">
        $(function () {

          var table = $('#kt_ecommerce_products_table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('service.list') }}",
              language: {
                  "sProcessing": "@lang('جاري العرض...')",
                  "sLengthMenu": "@lang('عرض _MENU_ سجل')",
                  "sZeroRecords": "@lang('لاتوجد سجلات متطابقة')",
                  "sInfo": "@lang('عرض _START_ إلى _END_ من أصل _TOTAL_ سجل')",
                  "sInfoEmpty": "@lang('إظهار 0 إلى 0 من أصل 0 سجل')",
                  "sInfoFiltered": "@lang('(تم التصفية من أصل _MAX_ إجمالي سجل)')",
                  "sSearch": "@lang('بحث  '):",
              },
              scrollX: false, // Enable horizontal scrolling
              scrollY: ' 500px', // Set the desired vertical scroll height
              scrollCollapse: true, // Allow the table to collapse when vertical space is limited


              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'name', name: 'name'},
                  {data: 'service_name', name: 'service_name'},
                  {data: 'description', name: 'description'},
                  {data: 'quantity', name: 'quantity'},
                  {data: 'organiz_name', name: 'organiz_name'},
                  {
                      data: 'action',
                      name: 'action',
                      orderable: true,
                      searchable: true
                  },
              ]
          });

        });
      </script>
      @endsection


</x-base-layout>
