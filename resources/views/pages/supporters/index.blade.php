<x-base-layout>
    @php
        $existingSupporterIds = $supporters->pluck('user_info_id')->toArray();
    @endphp
     <div class="block mb-5">
        <!--begin::Add user-->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
            <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
													</svg>
												</span>
            <!--end::Svg Icon-->إضافة داعم جديد</button>
        <!--end::Add user-->
    </div>

    <x-alert>
    </x-alert>

    <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="جميع الداعمين"
        userCount="اكثر من {{ count($supporters) }} داعم"
            :columns="['اسم الداعم', 'رقم العضوية', 'نوع العضوية','الوصف', 'نوع التأثير', 'الوظيفة', 'رقم الهاتف','جهة العمل','خيارات']">

        @foreach ($supporters as $row)
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                    </div>
                </td>
                <td>


                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-45px me-5">
                            @if($row->avatar == null)
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }}" alt="" />
                            @else
                            <img src="{{ asset(theme()->getMediaUrlPath() .$row->avatar) }}" alt="" />
                            @endif
                        </div>
                        <div class="d-flex justify-content-start flex-column">
                            <a href="#"
                                class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->info?->user->first_name }} {{ $row->info?->user->last_name }}</a>
                            <span
                                class="text-muted fw-bold text-muted d-block fs-7">{{ $row->info->user->email }}  </span>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->membership_id }}</div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->membershipType->name }}</div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->description }}</div>
                </td>


                <td class="min-w-125px">
                    @foreach ($row->supporter_influence as $v)
                        <span class="badge badge-light-danger fs-8 fw-bolder">{{ $v->influenceType->name }} </span>
                    @endforeach
                </td>


                <td class="min-w-125px">

                 <span class="badge badge-light-success fs-8 fw-bolder">  {{ $row->work }}</span>

                </td>
{{--                {{dd($row)}}--}}

                <td class="min-w-125px">{{ $row->info?->phone }}</td>

                <td class="min-w-125px">{{ $row->info?->company }}</td>

                <td>
                    <a href="{{ route('admin.settings.overview', $row->info->user->id) }}" title="عرض الملف الشخصي"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                    </a>
                    @hasrole('superadmin')
                    <form method="post" class="d-inline-block" action="{{ route('supporters.destroy', $row->id) }}">
                        @csrf
                        @method('DELETE')
                        {{-- <input type="hidden" value="{{ $row->id }}" name="id"> --}}
                        <a href="{{ route('supporters.destroy', $row->id) }}" title="حذف الداعم"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                            onclick="if(confirm('هل تود حذف هذا العنصر؟')) { event.preventDefault();
                            this.closest('form').submit();} else { return false }"
                            type="submit" value="حذف">
                            {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                        </a>
                    </form>
                    @endhasrole
                </td>
            </tr>
        @endforeach
    </x-admin.tables.table1>

    {{ $supporters->links() }}


    <!--begin::Modal - Add Supporter-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">إضافة داعم جديد</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_user_form" class="form" method="POST" action="{{route('supporters.store')}}">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="d-block fw-bold fs-6 mb-5">المستخدم</label>
                                <!--end::Label-->
                                <!--begin::Image input-->
                                <!--begin::Col-->
                                <select name="user_info_id" aria-label="{{ __('اختر المستخدم') }}" data-control="select2" data-placeholder="{{ __('اختر المستخدم ...') }}" class="form-select form-select-solid form-select-lg">
                                    <option value="">{{ __('اختر المستخدم') }}</option>
                                    @foreach (\App\Models\UserInfo::whereNotIn('id', $existingSupporterIds)->orderBy('created_at','desc')->get() as $value)
                                        <option value="{{ $value->user_id }}">{{ $value->user->name }}</option>
                                    @endforeach

{{--                                    @foreach(\App\Models\UserInfo::all() as $value)--}}
{{--                                        --}}
{{--                                        <option value="{{ $value->user_id}}">{{ $value->user->name}}</option>--}}
{{--                                   --}}
{{--                                    @endforeach--}}
                                </select>
                                <!--end::Col-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="d-block fw-bold fs-6 mb-5">العضوية</label>
                                <!--end::Label-->
                                <!--begin::Image input-->
                                <!--begin::Col-->
                                <select name="membershipType_id" aria-label="{{ __('Select a MembershipType') }}" data-control="select2" data-placeholder="{{ __('Select a MembershipType..') }}" class="form-select form-select-solid form-select-lg">
                                    <option value="">{{ __('Select Specialty..') }}</option>
                                    @foreach(\App\Models\MembershipType::all() as $value)
                                        <option value="{{ $value->id}}">{{ $value->name}}</option>
                                    @endforeach
                                </select>
                                <!--end::Col-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">الاحالات</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="referral_id" aria-label="{{ __('Select a Referral') }}" data-control="select2" data-placeholder="{{ __('Select a Referral..') }}" class="form-select form-select-solid form-select-lg">
                                    <option value="">{{ __('Select Referral..') }}</option>
                                    @foreach(\App\Models\Referral::all() as $value)
                                        <option value="{{ $value->id}}">{{ $value->value}}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('اختر تخصص') }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <select name="specialty_id" aria-label="{{ __('Select a Specialty') }}" data-control="select2" data-placeholder="{{ __('Select a Specialty..') }}" class="form-select form-select-solid form-select-lg">
                                    <option value="">{{ __('Select Specialty..') }}</option>
                                    @foreach(\App\Models\Specialty::all() as $value)
                                        <option value="{{ $value->id}}">{{ $value->name}}</option>
                                    @endforeach
                                </select>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-7">

                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-5">رقم الحساب البنكي</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="bank_account" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="رقم الحساب البنكي" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input row-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-5">بيانات العمل</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="work" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="بيانات العمل" />
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-5">الوصف </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="وصف العضوية" ></input>
                                    <!--end::Input-->
                                </div>                                                        <!--begin::Input row-->

                                <!--end::Roles-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">إلغاء</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">إضافة</span>
                                <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add Supporter-->



{{--    @section('scripts')--}}
{{--        <script src="{{asset('alkhirat/plugins/custom/datatables/datatables.bundle.js')}}"></script>--}}
{{--        <!--begin::Page Custom Javascript(used by this page)-->--}}
{{--        <script type="text/javascript">--}}
{{--            $(function () {--}}

{{--                var table = $('#kt_table_users').DataTable({--}}
{{--                    processing: true,--}}
{{--                    serverSide: true,--}}
{{--                    ajax: "{{ route('supporter.list') }}",--}}
{{--                    columns: [--}}
{{--                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},--}}
{{--                        {data: 'name', name: 'name'},--}}
{{--                        {data: 'membership', name: 'membership'},--}}
{{--                        {data: 'membership_id', name: 'membership_id'},--}}
{{--                        {data: 'description', name: 'description'},--}}
{{--                        {data: 'specialty', name: 'specialty'},--}}
{{--                        {--}}
{{--                            data: 'action',--}}
{{--                            name: 'action',--}}
{{--                            orderable: true,--}}
{{--                            searchable: true--}}
{{--                        },--}}
{{--                    ]--}}
{{--                });--}}

{{--            });--}}
{{--        </script>--}}
{{--    @endsection--}}


</x-base-layout>
