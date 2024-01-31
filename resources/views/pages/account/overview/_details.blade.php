<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('المعلومات الشخصية') }}</h3>
        </div>
        <!--end::Card title-->

        <!--begin::Action-->
        <a href="{{ theme()->getPageUrl('account/settings') }}"
            class="btn btn-primary align-self-center">{{ __('تعديل المعلومات الشخصية') }}</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('الاسم بالكامل') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{ auth()->user()->name }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('جهة العمل') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold fs-6">{{ auth()->user()->info->company }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">
                {{ __('رقم الجوال') }}
                <i class="fas fa-exclamation-circle ms-1 fs-7"></i>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bolder fs-6 me-2">{{ auth()->user()->info->phone }}</span>

                @if (auth()->user()->phone)
                    <span class="badge badge-success">{{ __('تم التحقق') }}</span>
                @endif
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('الموقع الالكتروني') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <a href="#"
                    class="fw-bold fs-6 text-dark text-hover-primary">{{ auth()->user()->info->website }}</a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">
                {{ __('الدولة') }}
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="الدولة"></i>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">
                    {{ auth()->user()->info->country ? collect(\App\Core\Data::getCountriesList())->get(auth()->user()->info->country)['name'] : '-' }}
                </span>
            </div>
            <!--end::Col-->


        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('وسيلة التواصل المفضلة') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                    @if($info->contact_method != null)
                    @if ($info->contact_method['email'] == '1')
                        <span class="badge badge-success">البريد الالكتروني</span>
                    @endif

                    @if ($info->contact_method['phone'] == '1')
                       <span class="badge badge-success">الهاتف</span>
                    @endif
                    @endif
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('السماح بالتواصل') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                @if($info->marketing != null)

                @if($info->marketing == 1)
             <span class="badge badge-success"> نعم </span>
                @endif

                    @if($info->marketing == 0)
                        <span class="badge badge-danger"> عدم السماح </span>
                    @endif
                @endif
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->


        <!--begin::Input group-->
        <div class="row mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('هل يمكنه تعديل البيانات؟') }}</label>
            <!--begin::Label-->

            <!--begin::Label-->
            <div class="col-lg-8">
                <span class="badge badge-success"> نعم </span>
            </div>
            <!--begin::Label-->
        </div>
        <!--end::Input group-->


        <!-- Start notice -->
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
            <!--begin::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 ">
                <!--begin::Content-->
                <div class=" fw-semibold">
                    <div class="fs-6 text-gray-700 ">الرجاء إكمال البيانات الشخصية للملف الخاص بك .</div>
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!-- End notice -->



    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
