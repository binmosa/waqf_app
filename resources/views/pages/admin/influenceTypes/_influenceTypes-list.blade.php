<div class="block mb-5">
    <!--begin::Add user-->
    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
        <!--end::Svg Icon-->إضافة نوع جديد</button>
    <!--end::Add user-->
</div>

<x-alert>
</x-alert>


         <!--begin::Card-->
         <div class="card">

            <!--begin::Card body-->
            <div class="card-body pt-0">
               <!--begin::Table-->
               <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                  <!--begin::Table head-->
                  <thead>
                     <!--begin::Table row-->
                     <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                           <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                           </div>
                        </th>
                        <th class="min-w-125px">النوع</th>
                        <th class="min-w-70px">أجراءات</th>
                     </tr>
                     <!--end::Table row-->
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody class="fw-bold text-gray-600">
                     @foreach($influenceTypes as $key => $value)
                     <tr>
                        <!--begin::Checkbox-->
                        <td>
                           <div class="form-check form-check-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="1" />
                           </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::Name=-->
                        <td>
                           <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $value->name }}</a>
                        </td>
                        <td class="">
                            @hasrole('superadmin')
                           <form method="post" class="form" action="{{  route('influenceTypes.destroy', $value->id) }}">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" value="{{ $value->id }}" name="id">
                              <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
                           </form>
                            @endrole
                        </td>
                        <!--end::Action=-->
                     </tr>
                     @endforeach
                  </tbody>
                  <!--end::Table body-->
               </table>
               <!--end::Table-->
            </div>
            <!--end::Card body-->
         </div>
         <!--end::Card-->
         <!--begin::Modals-->
         <!--begin::Modal - Customers - Add-->
         <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
               <!--begin::Modal content-->
               <div class="modal-content">
                  <!--begin::Form-->
                  <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('influenceTypes.store') }}" id="kt_modal_add_customer_form">
                     @csrf
                     @method('POST')
                     <!--begin::Modal header-->
                     <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">نوع جديد</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                           <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                           <span class="svg-icon svg-icon-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                 <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                 <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                     </div>
                     <!--end::Modal header-->
                     <!--begin::Modal body-->
                     <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fs-6 fw-bold mb-2">النوع</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid" name="name" placeholder="ألنوع" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->

                           <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                     </div>
                     <!--end::Modal body-->
                     <!--begin::Modal footer-->
                     <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                           <span class="indicator-label">اضافة</span>
                           <span class="indicator-progress">المرجو الانتظار ...
                              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
         <!--end::Modals-->

