<x-base-layout>
    @php
        $existingBeneficiaryIds = $beneficiaries->pluck('user_info_id')->toArray();
    @endphp

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
            <!--end::Svg Icon-->إضافة مستفيد جديد</button>
        <!--end::Add user-->
    </div>

    <!-- Display All Eneficiaries -->
    <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="جميع المستفيدين"
        userCount="اكثر من {{ count($beneficiaries) }} مستفيد"
                           :columns="['اسم المستفيد', 'رقم العضوية', 'المهنة', 'عضو متطوع؟', 'تاريخ الميلاد','عرض الحساب']">
        @foreach ($beneficiaries as $row)

            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                    </div>
                </td>

                <td>
                    @php
                        $avatar = $row->User->avatar ?: 'avatars/blank.png';
                    @endphp
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-45px me-5">
                            <img src="{{ asset(theme()->getMediaUrlPath() . $avatar) }}" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column">
                            <a href="#"
                               class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->User->user->name }}</a>

                            <span
                                class="text-muted fw-bold text-muted d-block fs-7">{{ $row->User->user->email }}</span>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->membership_id }}
                    </div>
                </td>

                <td>
                    <a href="#"
                       class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $row->id_occupation ?? '-' }}</a>
                    {{-- <span class="text-muted fw-bold text-muted d-block fs-7 text-right" lang="en"
                dir="ltr">
                الهاتف :: {{ $row->User->phone }}</span> --}}
                </td>

                <td class="min-w-125px">
                    @if ($row->User->volunteer != null)
                        <span
                            class="badge badge-light-success fs-8 fw-bolder">{{ $row->User->volunteer->volunteer_type }}</span>
                    @else
                        <span class="badge badge-light-danger fs-8 fw-bolder">لا</span>
                    @endif
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->date_of_birth ? $row->date_of_birth->format('Y-m-d') : $row->User->user->created_at }}
                    </div>
                    <span class="text-muted fw-bold text-muted d-block fs-7">{{ $row->age }} سنة</span>
                </td>

                <td>
                    <a href="{{ route('admin.settings.overview', $row->User->user->id) }}"
                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                    </a>


                </td>
            </tr>
        @endforeach
    </x-admin.tables.table1>

    <!-- Pagination links -->
    {{ $beneficiaries->links() }}



    <!--begin::Modal - Add Beneficiary-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">إضافة مستفيد جديد</h2>
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
                    <!--begin::Signup Form-->
                    <form method="POST" action="{{route('admin.registerBeneficiary')}}" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
                        @csrf

                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6 required">{{ __('الاسم الأول') }}</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" required name="first_name" autocomplete="off" value="{{ old('first_name') }}"/>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6 required">{{ __('الاسم الأخير') }}</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" required name="last_name" autocomplete="off" value="{{ old('last_name') }}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6 required">{{ __('البريد الالكتروني') }}</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" required name="email" autocomplete="off" value="{{ old('email') }}"/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 required">
                                    {{ __('الرقم السري') }}
                                </label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" required type="password" name="password" autocomplete="new-password"/>

                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                                </div>
                                <!--end::Input wrapper-->

                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Hint-->
                            <div class="text-muted">
                                {{ __('يجب أن تتكون كلمة المرور من 8 كلمات متنوعة مابين حروف وأرقام ورموز.') }}
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group--->

                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <label class="form-label fw-bolder text-dark fs-6 required">{{ __('تأكيد الرقم السري') }}</label>
                            <input class="form-control form-control-lg form-control-solid" required type="password" name="password_confirmation" autocomplete="off"/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                إضافة مستفيد
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Signup Form-->
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add Beneficiary-->



    @section('scripts')
{{--        <!--begin::Javascript-->--}}
{{--        <script>--}}
{{--            var hostUrl = "assets/";--}}
{{--        </script>--}}
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ asset('alkhirat/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('alkhirat/js/scripts.bundle.js') }}"></script>


    @endsection
</x-base-layout>
